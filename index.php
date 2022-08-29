<?php 
include("config.php");
$lista = [];
$perPage = 3;
$page = intval(filter_input(INPUT_GET, 'p'));

if($page < 1){
    $page = 1;
}
$offset = ($page - 1) * $perPage;

$query = "SELECT * FROM searchperson LIMIT $offset, $perPage";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="text-center mt-5 mb-4">
            <h2>busca</h2>
        </div>
        <input type="text" class="form-control" id="live_search" autocomplete="off" placeholder="Ex.: Cidade, CEP, rua ...">
    </div>
    <div class="registros">
        <p>registros</p>
        <?php 
        $result = mysqli_query($con, $query);

        if(mysqli_num_rows($result) > 0){?>
            <table class="table table-bordered table-striped mt-4">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>cidade</th>
                        <th>rua</th>
                        <th>numero</th>
                        <th>pais</th>
                        <th>cep</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    while($row = mysqli_fetch_assoc($result)){
                        $id = $row['id'];
                        $name = $row['name'];
                        $age = $row['age'];
                        $country = $row['country'];
                        $email = $row['email'];
                        $occupation = $row['occupation'];
                    
                    ?>
                    <tr>
                        <td><?php echo $id;?></td>
                        <td><?php echo $name;?></td>
                        <td><?php echo $age;?></td>
                        <td><?php echo $country;?></td>
                        <td><?php echo $email;?></td>
                        <td><?php echo $occupation;?></td>
                    </tr>
                    <?php 
                }
                ?>
                </tbody>
            </table>
        <?php
        }else{
            echo "<h6 class='text-danger text-center mt-3'>Não foi encontrado informações</h6>";
        }?>
    </div>
    <div id="searchresult">

    </div>
    <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#live_search").keyup(function(){
                var input = $(this).val();
                // alert(input);

                if(input != ""){
                    $.ajax({
                        url:"livesearch.php",
                        method: "POST",
                        data:{input:input},

                        success:function(data){
                            $("#searchresult").html(data);
                            $("#searchresult").css('display','block');
                            $(".registros").css('display','none');
                        }
                    });
                }else{
                    $("#searchresult").css("display","none");
                    $(".registros").css('display','block');
                }
            });
        });
    </script>
</body>
</html>