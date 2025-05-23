<?php
// Свързване към базата данни
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Взема категорията от input на човека
    $category = $_POST['category'];

    if ($category == "textbooks_and_materials") {
        $вид_артикул = $_POST['вид_артикул'];
        $номер_на_продукт = $_POST['номер_на_продукт'];
        $учебен_предмет = $_POST['учебен_предмет'];
        $клас = $_POST['клас'];
        $издателство = $_POST['издателство'];
        $цена = $_POST['цена'];
        $количество = $_POST['количество'];

        // Вмъкване в textbooks_and_materials table
        $sql = "INSERT INTO textbooks_and_materials (вид_артикул, номер_на_продукт, учебен_предмет, клас, издателство, цена, количество) 
                VALUES ('$вид_артикул', '$номер_на_продукт', '$учебен_предмет', '$клас', '$издателство', '$цена', '$количество')";
    }
    elseif ($category == "pens_and_creative_materials") {
        $вид_артикул = $_POST['вид_артикул'];
        $номер_на_продукт = $_POST['номер_на_продукт'];
        $цвят = $_POST['цвят'];
        $производител = $_POST['производител'];
        $цена = $_POST['цена'];
        $количество = $_POST['количество'];

        // Вмъкване в pens_and_creative_materials table
        $sql = "INSERT INTO pens_and_creative_materials (вид_артикул, номер_на_продукт, цвят, производител, цена, количество) 
                VALUES ('$вид_артикул', '$номер_на_продукт', '$цвят', '$производител', '$цена', '$количество')";
    }
    elseif ($category == "notebooks") {
        $вид_артикул = $_POST['вид_артикул'];
        $номер_на_продукт = $_POST['номер_на_продукт'];
        $формат = $_POST['формат'];
        $размер = $_POST['размер'];
        $производител = $_POST['производител'];
        $цена = $_POST['цена'];
        $количество = $_POST['количество'];

        // Вмъкване в notebooks table
        $sql = "INSERT INTO notebooks (вид_артикул, номер_на_продукт, формат, размер, производител, цена, количество) 
                VALUES ('$вид_артикул', '$номер_на_продукт', '$формат', '$размер', '$производител', '$цена', '$количество')";
    }
    elseif ($category == "office_supplies") {
        $вид_артикул = $_POST['вид_артикул'];
        $номер_на_продукт = $_POST['номер_на_продукт'];
        $размер = $_POST['размер'];
        $цена = $_POST['цена'];
        $количество = $_POST['количество'];

        // Вмъкване в office_supplies table
        $sql = "INSERT INTO office_supplies (вид_артикул, номер_на_продукт, размер, цена, количество) 
                VALUES ('$вид_артикул', '$номер_на_продукт', '$размер', '$цена', '$количество')";
    }
    elseif ($category == "books") {
        $номер_на_продукт = $_POST['номер_на_продукт'];
        $заглавие = $_POST['заглавие'];
        $жанр = $_POST['жанр'];
        $автор = $_POST['автор'];
        $издателство = $_POST['издателство'];
        $цена = $_POST['цена'];
        $количество = $_POST['количество'];

        // Вмъкване в books table
        $sql = "INSERT INTO books (номер_на_продукт, заглавие, жанр, автор, издателство, цена, количество) 
                VALUES ('$номер_на_продукт', '$заглавие', '$жанр', '$автор', '$издателство', '$цена', '$количество')";
    }

    if ($conn->query($sql) === TRUE) {
        echo "<h3>Продуктът беше успешно добавен!</h3>";

        // Взема цялата таблица
        $result = $conn->query("SELECT * FROM $category");

        if ($result && $result->num_rows > 0) {
            echo "<table border='1' cellpadding='8'>";
            // Заглавия
            echo "<tr>";
            while ($fieldinfo = $result->fetch_field()) {
                echo "<th>" . htmlspecialchars($fieldinfo->name) . "</th>";
            }
            echo "</tr>";

            // Редове
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                foreach ($row as $cell) {
                    echo "<td>" . htmlspecialchars($cell) . "</td>";
                }
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "<p>Няма записи в таблицата.</p>";
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
