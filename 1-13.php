<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Human {
            private $name;
            private $birthday;
            private $gender;

            public function __construct($name, $birthday, $gender) {
                $this->name = $name;
                $this->birthday = $birthday;
                $this->gender = $gender;
            }

            public function walk() {
                echo "{$this->name}は歩きます<br/>";
            }

            public function eat() {
                echo "食べます<br/>";
            }
        }

        $human = new Human("おさない", "2001年5月27日", "男");
        $human->eat();
        $human->walk();
    ?>
</body>
</html>