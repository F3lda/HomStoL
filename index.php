<?php
/**
 * @file index.php (HomStoL)
 *
 * @brief HomStoL - Home Stock List (list with information about items at home)
 * @date 2023-03-03
 * @author F3lda
 * @update 2023-11-03
 */

//-------------------
$username = "admin";
$password = "admin";
//-------------------


$icon_data = "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RXZ0PSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VFdmVudCMiCiAgICB4bWxuczpkYz0iaHR0cDovL3B1cmwub3JnL2RjL2VsZW1lbnRzLzEuMS8iCiAgICB4bWxuczpHSU1QPSJodHRwOi8vd3d3LmdpbXAub3JnL3htcC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgeG1wTU06RG9jdW1lbnRJRD0iZ2ltcDpkb2NpZDpnaW1wOjZlZTFkNTA3LTY4ZWYtNGQwYy05NTExLTAxNDZmMWE3MjA5ZSIKICAgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDphYzJkNmU0Yy03NzlkLTQyNjktYmE0Ny1hYzNlMDUzNmU4NWYiCiAgIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDpkZjg1Y2Q2OC0yNDQwLTRmYmQtYTljMy1iNDdjNDUzMjNhNjkiCiAgIGRjOkZvcm1hdD0iaW1hZ2UvcG5nIgogICBHSU1QOkFQST0iMi4wIgogICBHSU1QOlBsYXRmb3JtPSJXaW5kb3dzIgogICBHSU1QOlRpbWVTdGFtcD0iMTY3ODYyNDUwNzA3NTkwNiIKICAgR0lNUDpWZXJzaW9uPSIyLjEwLjMwIgogICB0aWZmOk9yaWVudGF0aW9uPSIxIgogICB4bXA6Q3JlYXRvclRvb2w9IkdJTVAgMi4xMCI+CiAgIDx4bXBNTTpIaXN0b3J5PgogICAgPHJkZjpTZXE+CiAgICAgPHJkZjpsaQogICAgICBzdEV2dDphY3Rpb249InNhdmVkIgogICAgICBzdEV2dDpjaGFuZ2VkPSIvIgogICAgICBzdEV2dDppbnN0YW5jZUlEPSJ4bXAuaWlkOjFkNzA4MDA1LTYyYWEtNDQyOC1hN2Q0LWQ1YjQyZDQ4MmIyNyIKICAgICAgc3RFdnQ6c29mdHdhcmVBZ2VudD0iR2ltcCAyLjEwIChXaW5kb3dzKSIKICAgICAgc3RFdnQ6d2hlbj0iMjAyMy0wMy0xMlQxMzozNTowNyIvPgogICAgPC9yZGY6U2VxPgogICA8L3htcE1NOkhpc3Rvcnk+CiAgPC9yZGY6RGVzY3JpcHRpb24+CiA8L3JkZjpSREY+CjwveDp4bXBtZXRhPgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgCjw/eHBhY2tldCBlbmQ9InciPz4fb5xqAAAABmJLR0QAQwBDAEN7GbpVAAAACXBIWXMAAA7DAAAOwwHHb6hkAAAAB3RJTUUH5wMMDCMH4zRfVAAAAXZJREFUeNrt3cENgzAMQNFSMVaOHiyD+Zi93BUqFbmhfe+MhGS+zClwVFU9oNHTCBAdogPRIToQHaID0SE6RAei4/ec714YEZfccM5p6hu46jlkpk2H1yuIDtEhOhAdogPRIToQHaID0SE6/sHZfcMxhqnbdCA6RAeiQ3QgOkQHokN0iA5Eh+hAdIgORIfoEJ0RIDpEB6JDdCA6RAeiQ3SIDkSH6EB0iA5Eh+hAdIgO0YHoEB2Ijhto/6R/RJi6TQeiQ3QgOkQHokN0IDpEh+hAdIgORIfoQHSIDtEZAaJDdCA6RAeiY3vtRxAz09Q38M2joDYdokN0IDpEB6JDdCA6RIfoQHSIDkSH6EB0iA5Eh+gQHYgO0YHoEB2IDtEhOhAdogPRIToQHaID0SE6RAeiQ3QgOkQHokN0iA56tP+maa1l6jYdiA7RgegQHYgO0YHoEB2iA9EhOvjQUVVlDNh0iA5Eh+hAdIgORIfoEB2IDtGB6LiXF5rBFgfp3ffWAAAAAElFTkSuQmCC";

require_once(__DIR__ . '/database/database.php');
require_once(__DIR__ . '/database/settings.php');



// SESSION
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['homstol_user_id'])) {
    $_SESSION['homstol_user_id'] = "";
    $_SESSION['homstol_user_name'] = "";
    $_SESSION['homstol_user_type'] = "";
}

// logout
if (isset($_GET['logout'])) {
    $_SESSION['homstol_user_id'] = "";
    $_SESSION['homstol_user_name'] = "";
    $_SESSION['homstol_user_type'] = "";

    // redirect
    header('Location: ./', true, 301);
    die();
}



// -------------------------------------------------------------------------------
// -------------------------------------------------------------------------------
// LOGGED IN
if (isset($_SESSION['homstol_user_name']) && $_SESSION['homstol_user_name'] != "") {

    // -------------------------------------------------------------------------------
    // PAGE ADD ITEM
    if (isset($_GET["ADD"])) {

        ?>
<!DOCTYPE html>
<html>
	<head>
		<title>HomStoL - Add new item</title>
        <link rel="icon" type="image/png" href="data:image/png;base64,<?php echo $icon_data; ?>" />
	</head>
	<body>
		<h1>Add new item</h1>
		<form action="./?ADD" method="POST" enctype="multipart/form-data">
            <div>
                <label for="name">Item name: </label>
                <input type="text" name="name" id="name" placeholder="name" required>
            </div>
            <div>
            <label for="desc">Description: </label>
            <br>
                <textarea id="desc" name="desc" rows="4" cols="50" placeholder="description"></textarea>
            </div>
            <div>
                <label for="imgs">Images: </label>
                <input type="file" name="imgs[]" id="imgs" multiple>
            </div>
            <hr>
            <div>
            <label for="notes">Notes: </label>
            <br>
                <textarea id="notes" name="notes" rows="4" cols="50" placeholder="notes"></textarea>
            </div>
            <div>
                <label for="url">Advertisement URL: </label>
                <input type="text" name="url" id="url" placeholder="url">
            </div>
            <hr>
            <div>
                <input type="submit" name="submit" value="ADD">
            </div>
        </form>
        <br>
        <?php
        // add new item
        if (isset($_POST["submit"])) {

            // check item name
            if (!isset($_POST["name"]) || empty($_POST["name"])) {
                echo "ERROR: Item name is missing!";
                die();
            }

            $data["name"] = $_POST["name"];

            if (isset($_POST["desc"])) {$data["desc"] = $_POST["desc"];} else {$data["desc"] = "";}
            if (isset($_POST["notes"])) {$data["notes"] = $_POST["notes"];} else {$data["notes"] = "";}
            if (isset($_POST["url"])) {$data["url"] = $_POST["url"];} else {$data["url"] = "";}

            $data["id"] = "";
            $data["hash"] = "";

            $data["state"] = 'CREATED';

            // connect to database
            $database = new Database($db_host, $db_name, $db_username, $db_password);
            $database->connect();


            // insert item to database
            $query = "INSERT INTO HomStoL (item_id, item_name, item_description, item_notes, item_hash, item_url, item_state, item_changed, item_created) VALUES (:id, :name, :desc, :notes, :hash, :url, :state, now(), now())";
            $result = $database->insert($query, $data);
            if ($database->lastError() == 'OK') {

                // set item ID and HASH
                $data = [];
                $data["id"] = date("Ymd").$result["inserted_id"];
                $data["hash"] = hash('sha256', ($data["id"].time()));

                $query = "UPDATE HomStoL SET item_id = :id, item_hash = :hash WHERE id = ".$result["inserted_id"];
                $result = $database->execute($query, $data);
                if ($database->lastError() == 'OK') {

                    echo "Item: ".$_POST["name"]." - successfully added.<br>";

                    // upload images
                    $path = './imgs/'.$data["id"].'/';

                    $files = array();
                    if (isset($_FILES["imgs"]) && isset($_FILES["imgs"]["name"])) {

                        for ($i = 0; $i < count($_FILES["imgs"]["name"]); $i++) {

                            foreach ($_FILES["imgs"] as $key=>$value) {
                                $files["img-".($i+1)][$key] = $_FILES["imgs"][$key][$i];
                            }
                        }
                    }

                    foreach ($files as $index => $file) {
                        if (isset($file['error']) || !is_array($file['error'])) {
                            if ($file['error'] == UPLOAD_ERR_OK) {
                                @mkdir($path, 0777, true);
                                $newFile = $path.$index."_".$file['name'];
                                if (!file_exists($newFile)){
                                    if (move_uploaded_file($file['tmp_name'], $newFile)) {
                                        chmod($newFile, 0777);
                                        // UPLOAD OK!
                                        echo "Image: {$file['name']} - successfully added.";
                                    } else {
                                        echo "{$file['name']} - Failed to move uploaded file.";
                                    }
                                } else {
                                    echo "{$file['name']} - File already exists.";
                                }
                            } else if ($file['error'] == UPLOAD_ERR_NO_FILE) {
                                echo "{$file['name']} - No image uploaded.";
                            } else if ($file['error'] == UPLOAD_ERR_INI_SIZE || $file['error'] == UPLOAD_ERR_FORM_SIZE) {
                                echo "{$file['name']} - Exceeded filesize limit.";
                            } else {
                                echo "{$file['name']} - Unknown error.";
                            }
                        } else {
                            echo "{$file['name']} - Invalid parameters.";
                        }
                        echo "<br>";
                    }

                } else {
                    echo "{$file['name']} - Item could not be updated: ";
                    print_r($result);
                    echo "<br>";
                }

            } else {
                echo "{$file['name']} - Item failed to add: ";
                print_r($result);
                echo "<br>";
            }

            echo "<br>";


            // disconnect from database
            $database->disconnect();

        }

        ?>
        <a href='./'>Back</a>
	</body>
</html>

<?php
    // -------------------------------------------------------------------------------
    // PAGE SHOW ITEM
    } else if (isset($_GET["SHOW"])) {

        // remove image
        if (isset($_GET["remove"])) {
            $path = './imgs/'.$_GET["SHOW"].'/'.$_GET["remove"];
            if(file_exists($path)) {
                unlink($path);

                header("Location: ./?SHOW=".$_GET["SHOW"]);
                die();
            }
        }


        // connect to database
        $database = new Database($db_host, $db_name, $db_username, $db_password);
        $database->connect();


        // update item info
        if (isset($_POST["submit"])){

            unset($_POST["submit"]);
            $_POST["id"] = $_GET["SHOW"];

            $query = "UPDATE HomStoL SET item_name = :name, item_description = :desc, item_notes = :notes, item_url = :url, item_state = :state WHERE item_id = :id";
            $result = $database->execute($query, $_POST);
            if ($database->lastError() != 'OK') {
                echo "ERROR: ";
                print_r($result);
            }

            $_POST["submit"] = "submit";
        }

        // load item info
        $query = "SELECT * FROM HomStoL WHERE item_id = :item";
        $data = ["item" => $_GET["SHOW"]];
        $result = $database->fetchAll($query, $data);
        $result = reset($result);
        if ($database->lastError() != 'OK') {
            echo "ERROR: ";
            print_r($result);
        }


        // disconnect from database
        $database->disconnect();


        // upload images
        ob_start();

        $path = './imgs/'.$_GET["SHOW"].'/';

        $files = array();
        if (isset($_FILES["imgs"]) && isset($_FILES["imgs"]["name"])) {

            for ($i = 0; $i < count($_FILES["imgs"]["name"]); $i++) {

                foreach ($_FILES["imgs"] as $key=>$value) {
                    $files["img-".($i+1)][$key] = $_FILES["imgs"][$key][$i];
                }
            }
        }

        foreach ($files as $index => $file) {
            if (isset($file['error']) || !is_array($file['error'])) {
                if ($file['error'] == UPLOAD_ERR_OK) {
                    @mkdir($path, 0777, true);
                    $newFile = $path.$index."_".$file['name'];
                    if (!file_exists($newFile)){
                        if (move_uploaded_file($file['tmp_name'], $newFile)) {
                            chmod($newFile, 0777);
                            // UPLOAD OK!
                            echo "Image: {$file['name']} - successfully added.";
                        } else {
                            echo "{$file['name']} - Failed to move uploaded file.";
                        }
                    } else {
                        echo "{$file['name']} - File already exists.";
                    }
                } else if ($file['error'] == UPLOAD_ERR_NO_FILE) {
                    echo "{$file['name']} - No image uploaded.";
                } else if ($file['error'] == UPLOAD_ERR_INI_SIZE || $file['error'] == UPLOAD_ERR_FORM_SIZE) {
                    echo "{$file['name']} - Exceeded filesize limit.";
                } else {
                    echo "{$file['name']} - Unknown error.";
                }
            } else {
                echo "{$file['name']} - Invalid parameters.";
            }
            echo "<br>";
        }
        // save upload messages
        $files_upload_content = ob_get_contents();
        ob_end_clean();

        ?>
<!DOCTYPE html>
<html>
	<head>
		<title>HomStoL - Edit item</title>
        <link rel="icon" type="image/png" href="data:image/png;base64,<?php echo $icon_data; ?>" />
	</head>
	<body>
		<h1>Edit item</h1>
		<form action="./?SHOW=<?php if (isset($_GET["SHOW"])) {echo $_GET["SHOW"];} ?>" method="POST" enctype="multipart/form-data">
            <div>
                <label for="name">Item ID: </label>
                <input type="text" disabled="disabled" value="<?php if(isset($result["item_id"])){echo $result["item_id"];} ?>">
            </div>
            <div>
                <label for="name">Item name: </label>
                <input type="text" name="name" id="name" placeholder="name" value="<?php if(isset($result["item_name"])){echo $result["item_name"];} ?>" required>
            </div>
            <div>
            <label for="desc">Description: </label>
            <br>
                <textarea id="desc" name="desc" rows="4" cols="50" placeholder="description"><?php if(isset($result["item_description"])){echo $result["item_description"];} ?></textarea>
            </div>
            <div>
                <label for="imgs">New images: </label>
                <input type="file" name="imgs[]" id="imgs" multiple>
            </div>
            <div>
                <label for="imgs">Current images: </label>
                <?php
                // show item images
                if (!empty($_GET["SHOW"])) {
                    $path = './imgs/'.$_GET["SHOW"].'/';
                    $array = @scandir($path);
                    if ($array != false) {
                        $array = array_diff($array, array('.', '..', 'index.php'));

                        foreach($array as $img) {
                            echo "<br>Image: ".$img." - <a onclick='return confirm(\"Do you really want to delete this image <".$img.">?\");' title='remove image' href='./?SHOW=".$_GET["SHOW"]."&remove=".$img."'>x</a><br><img width='640' height='480' src='".$path.$img."'>";
                        }
                    } else {
                        echo "No images!<br>";
                    }
                }

                ?>
            </div>
            <hr>
            <div>
            <label for="notes">Notes: </label>
            <br>
                <textarea id="notes" name="notes" rows="4" cols="50" placeholder="notes"><?php if(isset($result["item_notes"])){echo $result["item_notes"];} ?></textarea>
            </div>
            <div>
                <label for="name">Item hash: </label>
                <input type="text" disabled="disabled" size="80" value="<?php if(isset($result["item_hash"])){echo $result["item_hash"];} ?>">
            </div>
            <div>
                <label for="url">Advertisement URL: </label>
                <input type="text" name="url" id="url" placeholder="url" value="<?php if(isset($result["item_url"])){echo $result["item_url"];} ?>">
            </div>
            <div>
                Item state: <?php if(isset($result["item_state"])){echo $result["item_state"];} ?><br>
                <input type="radio" id="state1" name="state" value="CREATED" <?php if(isset($result["item_state"]) && $result["item_state"] == "CREATED"){echo "checked";} ?>>
                <label for="state1">CREATED</label><br>
                <input type="radio" id="state2" name="state" value="EXPOSED" <?php if(isset($result["item_state"]) && $result["item_state"] == "EXPOSED"){echo "checked";} ?>>
                <label for="state2">EXPOSED</label><br>
                <input type="radio" id="state3" name="state" value="IN STOCK" <?php if(isset($result["item_state"]) && $result["item_state"] == "IN STOCK"){echo "checked";} ?>>
                <label for="state3">IN STOCK</label><br>
                <input type="radio" id="state4" name="state" value="SOLD" <?php if(isset($result["item_state"]) && $result["item_state"] == "SOLD"){echo "checked";} ?>>
                <label for="state4">SOLD</label><br>
                <input type="radio" id="state5" name="state" value="CANCELED" <?php if(isset($result["item_state"]) && $result["item_state"] == "CANCELED"){echo "checked";} ?>>
                <label for="state5">CANCELED</label><br>
                <input type="radio" id="state6" name="state" value="THROWN AWAY" <?php if(isset($result["item_state"]) && $result["item_state"] == "THROWN AWAY"){echo "checked";} ?>>
                <label for="state6">THROWN AWAY</label><br>
                <br>
            </div>
            <hr>
            <div>
                <input type="submit" name="submit" value="Save changes">
            </div>
        </form>
        <br>
        <?php
        // print upload messages
        echo $files_upload_content;
        if ($files_upload_content != "") {
            echo "<br>";
        }

        // show back button
        if (isset($_POST["submit"])) {
            echo "<a href='./'>back</a>";
        } else {
            echo "<a onclick='window.history.back(); return false;' href='./'>back</a>";
        }

    // -------------------------------------------------------------------------------
    // PAGE PROFILE/INFO
    } else if (isset($_GET["INFO"])) {
        ?>

<!DOCTYPE html>
<html>
    <head>
        <title>HomStoL - Profile/Info</title>
        <link rel="icon" type="image/png" href="data:image/png;base64,<?php echo $icon_data; ?>" />
    </head>
    <body>
        <h1>HomStoL - Profile/Info</h1>
        <hr>
        <form method="post" action="./?INFO">
            <div>
                <label for="info">Data and notes: </label>
                <br>
                <textarea id="info" name="info" rows="4" cols="50" placeholder="údaje" style="width: 500px; height: 500px;"><?php if(file_exists("./data/data.txt")){echo file_get_contents("./data/data.txt");} ?></textarea>
            </div>
            <br>
            <button type="submit" name="save" value="save">Save</button>
        </form>
        <br>
        <a href='./'>back</a>
    </body>
</html>

        <?php
        if (isset($_POST["save"])) {

            if (isset($_POST["info"])) {
                file_put_contents("./data/data.txt", $_POST["info"]);
                header("Location: ./?INFO");
                die();
            }

        }

    // -------------------------------------------------------------------------------
    // PAGE LIST
    } else {

        // max items per page
        define('ITEMS_PER_PAGE', 5);


        // sql rows limit
        $data['page_number'] = 1;
        $data['item_count'] = ITEMS_PER_PAGE;

        if (isset($_GET['page_number'])) {
            $_GET['page_number'] += 0;
            if (is_int($_GET['page_number']) && $_GET['page_number'] > 0) {
                $data['page_number'] = $_GET['page_number'];
            } else {
                header("Location: ./");
                die();
            }
        }

        if (isset($_GET['item_count'])) {
            $_GET['item_count'] += 0;
            if (is_int($_GET['item_count']) && $_GET['item_count'] > 0) {
                $data['item_count'] = $_GET['item_count'];
            } else {
                header("Location: ./");
                die();
            }
        }

        $data['item_limit'] = $data['page_number']*$data['item_count'];


		ob_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>HomStoL - Home Stock List</title>
        <link rel="icon" type="image/png" href="data:image/png;base64,<?php echo $icon_data; ?>" />
        <style>
            @charset"utf-8";
            @media screen and (max-width: 850px) {
                li {
                    width: 100% !important;
                    float: none !important;
                }
            }

            @media screen and (max-width: 1232px) {
                .item_attribute {
                    margin-bottom: 10px;
                }
            }

            .navbar ul {
                list-style-type: none;
                margin: 0;
                padding: 5px 0 5px 0;
                overflow: hidden;
            }

            .navbar li {
                float: left;
                width: 16.6%;
                text-align: center;
                /* Split width appropriately */
            }

            .navbar a:link, .navbar a:visited {
                display: block;
                font-weight: bold;
                text-align: center;
                padding: 4px;
                text-decoration: none;
                text-transform: uppercase;
                color: #484848;
            }

            .navbar a:hover, .navbar a:active {
                background-color: #939393;
                color: white;
            }

            #banner a {
                text-decoration: none;
            }

            #banner h1 {
                text-align: center;
                color: #484848;
                font-size: 5em;
                border: gray 3px solid;
            }
        </style>
	</head>
	<body>
        <div id="banner">
            <a href="./"><h1>HomStoL - Home Stock List</h1></a>
        </div>
        <div class="navbar">
            <ul>
                <li>
                    <input type="search" id="search" placeholder="search" value="<?php if(isset($_GET["search"])){echo $_GET["search"];} ?>" onchange="var searchParams = new URLSearchParams(window.location.search); searchParams.set('search', this.value); window.location.search = searchParams.toString();" /> <input type="submit" name="search" value="search"/>
                </li>
                <li>
                    Sort by:
                    <select id="sort" name="sort" onchange="var searchParams = new URLSearchParams(window.location.search); searchParams.set('sort', this.value); window.location.search = searchParams.toString();">
                        <option value="created" <?php if(isset($_GET["sort"]) && $_GET["sort"] == "created"){echo "selected";} ?>>creation time</option>
                        <option value="updated" <?php if(isset($_GET["sort"]) && $_GET["sort"] == "updated"){echo "selected";} ?>>last update</option>
                        <option value="state" <?php if(isset($_GET["sort"]) && $_GET["sort"] == "state"){echo "selected";} ?>>state</option>
                    </select>
                </li>
                <li>
                    Items per page: <input type="number" name="item_count" min="1" value="<?php echo $data['item_count']; ?>" size="5" onchange="var searchParams = new URLSearchParams(window.location.search); searchParams.set('item_count', this.value); window.location.search = searchParams.toString();">
                </li>
                <li>
                    <a href="./?ADD">add new item</a>
                </li>
                <li>
                    <a href="./?INFO">profile/info - <?php echo $_SESSION['homstol_user_name']; ?></a>
                </li>
                <li>
                    <a href="./?logout">log out</a>
                </li>
            </ul>
            <hr>
        </div>
        <?php

		$doc_head = ob_get_contents();
		ob_end_clean();



        // connect to database
        $database = new Database($db_host, $db_name, $db_username, $db_password);
        $database->connect();

        // Check if table exists
        $result = $database->execute("SELECT 1 FROM HomStoL LIMIT 1", []);
        if ($database->lastError() != 'OK') {
            // If not, create one
            $result = $database->execute("CREATE TABLE HomStoL (
                id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                item_id VARCHAR(48), /* date (yyyymmdd) + id */
                item_name VARCHAR(255),
                item_description VARCHAR(1024),
                /* ïmages in folder */
                item_notes VARCHAR(1024),
                item_hash VARCHAR(65), /* (sha256) = ID + DATE */
                item_url VARCHAR(255), /* inzerat url */
                item_state ENUM('CREATED','EXPOSED','IN STOCK','SOLD','CANCELED','THROWN AWAY'),
                /* Vytvořeno - nově vytvořeno v HomStoLu, Vystaveno - vystaven inzerát, Skladem - nevystaveno ale skladem, Prodáno, Zrušeno - nakonec se nebude prodávat, Vyhozeno - vyhodilo se */
                item_changed TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                item_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                )", []);

            if ($database->lastError() == 'OK') {
                echo "\nTable created successfully!";
            } else {
                echo "Table could not be created: ";
                print_r($result);
            }
        }


        // SHOW ITEMS
        if ($database->lastError() == 'OK' && $result["row_count"] == 0) {

			echo $doc_head;
            echo "<h3>No items found!</h3>";

        } else if ($database->lastError() == 'OK') {

            // set items order
            $items_oderd_by = "item_created DESC";
            if (isset($_GET["sort"])) {
                if ($_GET["sort"] == "updated") {
                    $items_oderd_by = "item_changed DESC";
                } else if ($_GET["sort"] == "state") {
                    $items_oderd_by = "item_state";
                }
            }


            // get rows count
            if (isset($_GET["search"])) {
                // - with search
                $result = $database->fetchAll("SELECT COUNT(*) FROM HomStoL WHERE (item_id LIKE :search OR item_name LIKE :search OR item_description LIKE :search OR item_notes LIKE :search) ORDER BY ".$items_oderd_by, ["search" => '%'.$_GET["search"].'%']);
                if ($database->lastError() == 'OK') {
                    $result = ['item_count' => $result[0]['COUNT(*)']];
                } else {
                    die($database->lastError());
                }
            } else {
                // - all
                $result = $database->fetchAll("SELECT COUNT(*) FROM HomStoL ORDER BY ".$items_oderd_by, []);
                if ($database->lastError() == 'OK') {
                    $result = ['item_count' => $result[0]['COUNT(*)']];
                } else {
                    die($database->lastError());
                }
            }


            // get pages numbers and links
            $pages_count = ceil($result["item_count"]/$data['item_count']);
            $pages_links = "Pages: ";
            for($i = 1; $i <= $pages_count; $i++)
            {
                $link = 'page_number='.$i;
                if (isset($_GET["item_count"])) {$link .= '&item_count='.$data['item_count'];}
                if (isset($_GET["sort"])) {$link .= '&sort='.$_GET["sort"];}
                if (isset($_GET["search"])) {$link .= '&search='.$_GET["search"];}

                if ($i == $data['page_number']) {
                    $pages_links .= '<a style="color:red;" href="./?'.$link.'">'.$i.'</a> ';
                } else {
                    $pages_links .= '<a href="./?'.$link.'">'.$i.'</a> ';
                }
            }


            // redirect when wrong page
            if ($pages_count < $data['page_number']) {

                // if page number is bigger than number of pages -> go to last page with current item count
                if (isset($_GET["item_count"])) {
                    header("Location: ./?page_number=".$pages_count."&item_count=".$_GET["item_count"]);

                // if search is set
                } else if (isset($_GET["search"])) {
                    header("Location: ./?search=".$_GET["search"]);

                // if sort is set
                } else if (isset($_GET["sort"])) {
                    header("Location: ./?sort=".$_GET["sort"]);
                } else {
                    header("Location: ./");
                }
                die();
            }


            // get rows with items
            if (isset($_GET["search"])) {

                // - with search
                $result = $database->fetchAll("SELECT * FROM HomStoL WHERE (item_id LIKE :search OR item_name LIKE :search OR item_description LIKE :search OR item_notes LIKE :search) ORDER BY ".$items_oderd_by." LIMIT ".$data['item_limit'], ["search" => '%'.$_GET["search"].'%']);
                if ($database->lastError() !== 'OK') {
                    die($database->lasterror());
                }
            } else {

                // - all
                $result = $database->fetchAll('SELECT * FROM HomStoL ORDER BY '.$items_oderd_by.' LIMIT '.$data['item_limit'], []);
                if ($database->lastError() !== 'OK') {
                    die($database->lasterror());
                }
            }
            // remove rows from other pages
            if ($data['page_number'] > 1) {
                $slice_count = ($data['page_number']-1)*$data['item_count'];
                $result = array_slice($result, $slice_count);
            }





			// print document head
			echo $doc_head;



			// print pages numbers and links
            echo $pages_links;



            // print items
            echo "<pre>";
            foreach($result as $item) {

                // find item image
                $img = './imgs/'.$item["item_id"].'/';
                $array = @scandir($img);
                if ($array != false) {
                    $array = array_diff($array, array('.', '..', 'index.php'));
                    if(count($array) > 0) {
                        $img .= reset($array);
                    }
                }

                // print item
                echo '<hr>';
                echo '<div style="display:flex; flex-wrap:wrap;">';
                echo '  <a class="item_attribute" href="./?SHOW='.$item["item_id"].'"><img src="'.$img.'" alt="'.$item["item_name"].'" width="140px" height="105px" style="display:block; background: #999; margin-right: 10px;"></a>';
                echo '  <div class="item_attribute" style="width:50%; float: left; min-width: 150px; white-space: normal;"><a href="./?SHOW='.$item["item_id"].'">'.$item["item_name"].'</a><br><div>'.$item["item_description"].'</div></div>';
                echo '  <div class="item_attribute" style="width:10%; float: left; min-width: 150px;">State: <br>'.$item["item_state"].'</div>';
                echo '  <div class="item_attribute" style="width:10%; float: left; min-width: 150px;">Last update: <br>'.$item["item_changed"].'</div>';
                echo '  <div class="item_attribute" style="width:10%; float: left; min-width: 150px;">Created: <br>'.$item["item_created"].'</div>';
                echo '</div>';

            }
            echo "</pre>";
            echo "<hr>";



            // print pages numbers and links
            echo $pages_links;
        }


        // disconnect from database
        $database->disconnect();
?>
	</body>
</html>
<?php
    }

// -------------------------------------------------------------------------------
// -------------------------------------------------------------------------------
// NOT LOGGED IN
} else {

    // Login
    if (isset($_POST["login"])) {
        if (!isset($_POST["login"]) || empty($_POST["username"]) || empty($_POST["password"])
        || ($_POST["username"] != $username || $_POST["password"] != $password)) {

            // Invalid login
            // redirect
            header('Location: ./', true, 301);
            die();

        } else {
            // OK login
            $_SESSION['homstol_user_id'] = "1";
            $_SESSION['homstol_user_name'] = $_POST["username"];
            $_SESSION['homstol_user_type'] = "admin";

            // redirect
            header('Location: ./', true, 301);
            die();
        }

    // Unauthorized
    } else if (count($_POST) > 0 || count($_GET) > 0) {

        echo "ERROR - Unauthorized";
        http_response_code(401);

    // Login page
    } else {
        ?>
<!DOCTYPE html>
<html>
	<head>
		<title>HomStoL - Login</title>
        <link rel="icon" type="image/png" href="data:image/png;base64,<?php echo $icon_data; ?>" />
	</head>
	<body>
        <div style="position: absolute; left: 50%; top: 50%; -webkit-transform: translate(-50%, -50%); transform: translate(-50%, -50%);">
            <form method="post" action="./">
                <fieldset style="display:inline;">
                    <legend><h2 style="margin: 5px;"><a href="https://github.com/F3lda/HomStoL" target="_blank" title="HomStoL by F3lda">HomStoL</a> - Home Stock List</h2></legend>
                    <div>
                        <label>Username: </label>
                        <input type="text" name="username" pattern="[a-zA-Z0-9]+" required /><br>
                    </div>
                    <div>
                        <label>Password: </label>
                        <input type="password" name="password" required /><br>
                    </div>
                    <button type="submit" name="login" value="login">Log In</button>
                </fieldset>
            </form>
        </div>
    </body>
</html>

        <?php
    }
}
?>
