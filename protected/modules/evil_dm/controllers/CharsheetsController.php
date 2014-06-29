<?php

class CharsheetsController extends Controller
{
	protected $anket_db = "tbl_charsheet";
	public $allspecs = array("a", "b", "i", "o", "r", "j", "n");

	public function actionIndex()
	{
		$chars = Yii::app()->db->createCommand()
				->select()
				->from($this->anket_db)
				->where("state = 1")
				->order("name")
//				->where("id = 00474")
				->queryAll();

		/*
		 * faculty:
		 * i - история
		 * b - боевой
		 * z - неактив
		 * a - алхимия
		 * j - жители
		 * m - мудак?
		 * r - препод
		 * o - оккультизм
		 * n - новый (проектируем)
		 */
		foreach ($chars as $char)
		{
			switch ($char['faculty'])
			{
				case 'b':
					$persons[0][] = $char;
					break;
				case 'a':
					$persons[1][] = $char;
					break;
				case 'o':
					$persons[2][] = $char;
					break;
				case 'i':
					$persons[3][] = $char;
					break;
				case 'r':
					$persons[4][] = $char;
					break;
				case 'j':
					$persons[5][] = $char;
					break;
			}
		}
		ksort($persons);

		$this->pageTitle .= " - Список анкет";
		$this->render('index', array("persons"=>$persons));
	}

	public function actionPerson()
	{
		if (!empty($_GET["id"]))
		{
			$id = $_GET["id"];
			$char = Yii::app()->db->createCommand()
					->select()
					->from($this->anket_db)
					->where("id = ". $id)
					->andWhere("state = 1")
					->andWhere("faculty IN ('i', 'a', 'b', 'j', 'r', 'o')")
					->queryAll();
			if (!empty($char))
			{
				$char[0]['role'] = $this->getFaculty($char[0]["faculty"], $char[0]["kurs"]);
				$this->pageTitle .= " - " . $char[0]["name"];
				$this->render('person', array("char"=>$char[0]));
				exit();
			}
		}
		$this->redirect("index");
	}

	public function getFaculty($symbol, $curs)
	{
		$curs = empty($curs)?"" : ", ".$curs."-й курс";
		switch ($symbol)
		{
			case "i":
				return "Факультет Истории Магии".$curs;
				break;
			case "b":
				return "Факультет Биоэнергетики".$curs;
				break;
			case "o":
				return "Факультет Оккультизма".$curs;
				break;
			case "a":
				return "Факультет Алхимии".$curs;
				break;
			case "r":
				return "Преподаватель";
				break;
			case "j":
				return "Житель";
				break;
		}
		return null;
	}

	/**
	 *
	 * @param array $whom - массив адресатов
	 * @param string $from - от кого
	 *	рассылка - selectbox: факультету, студентам, курсу, преподам, старостам(!), жителям, всем активным, конкретному пользователю
	 */
	public function actionMailThis()
	{
		$whom = $_POST["mail"]["whom"];
		$from = $_POST["mail"]["from"];
		if (!empty($whom) && !empty($from) && is_array($whom))
		{
			$select = Yii::app()->db->createCommand()
					->select("mail")
					->from($this->anket_db)
					->where("state = 1")
					->andWhere("mail IS NOT NULL")
					->andWhere("mail <> ' '");
			/* список условий */
			if ($name)
			{
				$select->andWhere("name = ".$name);
			}
			if ($faculty)
			{
				$facs = "";
				foreach ($faculty as $key=>$one)
				{
					if (in_array($one, $this->allspecs)) //делаем валидацию по списку специальностей
					{
						$facs .= "'".$one."'";
						if ($key != count($faculty) -1)
						{
							$facs .= ", ";
						}
					}
				}
				if (!empty($facs))
				{
					$select->andWhere("faculty IN (".$facs.")");
				}
			}
			else
			{
				$select->andWhere("faculty IN ('i', 'a', 'b', 'j', 'r', 'o')");
			}
			/*конец списка условий*/
			$select->queryAll();

			$cnt = count($whom)-1; //кэшируем значение, дабы не прогонять его циклом n раз.
			foreach ($whom as $num=>$adress)
			{
				if (!empty($adress) && $adress != " ")
				{
					$adresses .= "<".$adress.">";
					if ($num != $cnt) //является ли текущий элемент последним в массиве
					{
						$adresses .= ", ";
					}
				}

			}
			return false;
			exit(); //ajax
		}

		/* получатели */
		$to= "<dungeonmagister@gmail.com>" . ", " ; //обратите внимание на запятую
		$to .= "<freyburg@yandex.ru>";

		/* тема/subject */
		$subject = "Тестим рассылку v2";

		/* сообщение */
		$message = '
		<html>
		<head>
		 <title>Тестим рассылку v2 же</title>
		</head>
		<body>
		<p>Привет из АСД</p>
		<table>
		 <tr>
		<th>Person</th><th>Day</th><th>Month</th><th>Year</th>
		 </tr>
		 <tr>
		<td>Joe</td><td>3rd</td><td>August</td><td>1970</td>
		 </tr>
		 <tr>
		<td>Sally</td><td>17th</td><td>August</td><td>1973</td>
		 </tr>
		</table>
		</body>
		</html>
		';

		/* Для отправки HTML-почты вы можете установить шапку Content-type. */
		$headers= "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=UTF-8\r\n";

		/* дополнительные шапки */
		$headers .= "From: ASD <master.censor@gmail.com>\r\n";
		$headers .= "Cc: master.censor@gmail.com\r\n";
		$headers .= "Bcc: master.censor@gmail.com\r\n";

		/* и теперь отправим из */
		mail($to, $subject, $message, $headers);
	}
}