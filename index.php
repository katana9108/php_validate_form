<?php
require_once 'info.php';
require_once 'message.php';




class User implements Info
{
    use Message;

    public function getInfo()
    {
        if (isset($_POST['valider'])) {
            if (
                isset($_POST['name']) and isset($_POST['email']) and
                isset($_POST['phone']) and isset($_POST['phone']) and isset($_POST['message'])
            ) {
                if (!empty($_POST['name']) and !empty($_POST['email']) and !empty($_POST['phone']) and !empty($_POST['message'])) {
                    $data = [
                        $name = htmlspecialchars($_POST['name']),
                        $email = htmlspecialchars($_POST['email']),
                        $phone = htmlspecialchars($_POST['phone']),
                        $message = htmlspecialchars($_POST['message'])
                    ];
                    var_dump(($data));
                    // header("Location: http://phpform.test/");
                }else{
                    echo "quelque chose s'est mal passée!";
                }
            }
        }
    }
}

$user = new User();
$user->getInfo();
$user->success();

