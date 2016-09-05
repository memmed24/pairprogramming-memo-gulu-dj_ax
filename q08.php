<html>
    <head></head>
    <body>
        <form action="" method="post">
            <input type="number" name="num">
            <input type="submit" name="submit">
        </form>
        <?php
        //1.Ededin faktorialini hesablayan Class yazin//

        if (isset($_POST['submit'])){
            $num = $_POST['num'];
            class fact{
                function factorial($num){
                    if($num==0){
                        return 1;
                    }
                    return $num * $this->factorial($num-1);

                }
            }
            $s = new fact;
            echo $s->factorial($num);
        }



        ?>
    </body>
</html>