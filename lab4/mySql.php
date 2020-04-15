	<form method="POST"> 
		<table><tr>
		<td>логин:</td><td><input type="text" name="loginUser"></td></tr><br>
		<td>пароль: </td><td><input type="text" name="passwordUser"></td></tr><br>
		<td>email: </td><td><input type="text" name="emailUser"></td></tr><br>
		<td>о себе: </td><td><input type="text" name="aboutUser"></td></tr><br>
		</table>
		<input type="submit" name="add" value="Добавить нового пользователя">
	</form><br>
	<form method="POST"> 
		<table><tr>
		<td>IDпользователя:</td><td><input type="text" name="IdUser"></td></tr><br>
		</table>
		<input type="submit" name="delete" value="Удалить пользователя">
	</form>
	<form method="POST"> 
		<table><tr>
		<td>IDпользователя:</td><td><input type="text" name="IdUser"></td></tr><br>
		<td>новый логин:</td><td><input type="text" name="loginUser"></td></tr><br>
		</table>
		<input type="submit" name="update" value="Изменить логин">
	</form>


<?php
$link = mysqli_connect('localhost','root','', 'buymypoem');
$res = mysqli_query($link,"SELECT * FROM `user`");
if($res) {
	echo '<table border="1px solid red">';
while($row = mysqli_fetch_assoc($res)) {
	echo '</tr>';
	echo '<td>' . $row['userID'] . '</td>';
	echo '<td>' . $row['login'] . '</td>';
	echo '<td>' . $row['password'] . '</td>';
	echo '<td>' . $row['email'] . '</td>';
	echo '<td>' . $row['about'] . '</td>';
	echo '</tr>';}
mysqli_free_result($res);}
echo '</table>';


if( isset( $_POST['add'] ) )
    {
    	$loginUser=$_POST['loginUser'];
    	$passwordUser=$_POST['passwordUser'];
    	$emailUser=$_POST['emailUser'];
    	$aboutUser=$_POST['aboutUser'];

        if (mysqli_query($link, "INSERT INTO `user` (`login`, `password`, `email`, `about`) 
        	VALUES ('$loginUser', '$passwordUser', '$emailUser', '$aboutUser')")){
		   echo "<br>Успешно создана новая запись";
		} else {
		  echo "Ошибка: " . mysqli_error($link);
		}
    }

if( isset( $_POST['delete'] ) )
    {
    	$IdUser=$_POST['IdUser'];

        if (mysqli_query($link, "DELETE FROM `user` WHERE `userID` = $IdUser")){
		   echo "<br>Запись успешно удалена";
		} else {
		  echo "Ошибка: " . mysqli_error($link);
		}

    }

if( isset( $_POST['update'] ) )
    {
    	$IdUser=$_POST['IdUser'];
    	$loginUser=$_POST['loginUser'];

        if (mysqli_query($link, "UPDATE `user` SET `login` = '$loginUser' WHERE `userID` = $IdUser")){
		   echo "<br>Запись успешно обновлена";
		} else {
		  echo "Ошибка: " . mysqli_error($link);
		}

    }

mysqli_close($link);
?>

