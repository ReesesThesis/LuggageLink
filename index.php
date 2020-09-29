<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Luggage Link</title>
</head>

<style>
    section {
        display: flex;
        flex-flow: row wrap;
    }
    
    section>div {
        flex: 1;
        padding: 0.5rem;
    }
    
    input[type="radio"] {
        display: none;
        &:not(:disabled)~label {
            cursor: pointer;
        }
        &:disabled~label {
            color: hsla(150, 5%, 75%, 1);
            border-color: hsla(150, 5%, 75%, 1);
            box-shadow: none;
            cursor: not-allowed;
        }
    }
    
    label {
        height: 100%;
        display: block;
        background: white;
        border: 2px solid hsla(150, 75%, 50%, 1);
        border-radius: 20px;
        padding-right: 20px;
        padding-left: 20px;
        /* margin-bottom: 1rem;
  //margin: 1rem; */
        text-align: center;
        box-shadow: 0px 3px 10px -2px hsla(150, 5%, 65%, 0.5);
        position: relative;
    }
    
    input[type="radio"]:checked+label {
        background: hsla(150, 75%, 50%, 1);
        color: hsla(215, 0%, 100%, 1);
        box-shadow: 0px 0px 20px hsla(150, 100%, 50%, 0.75);
        &::after {
            color: hsla(215, 5%, 25%, 1);
            font-family: FontAwesome;
            border: 2px solid hsla(150, 75%, 45%, 1);
            content: "\f00c";
            font-size: 24px;
            position: absolute;
            top: -25px;
            left: 50%;
            transform: translateX(-50%);
            height: 25px;
            width: 25px;
            line-height: 50px;
            text-align: center;
            border-radius: 50%;
            background: white;
            box-shadow: 0px 2px 5px -2px hsla(0, 0%, 0%, 0.25);
        }
    }
    
    input[type="radio"]#control_05:checked+label {
        background: red;
        border-color: red;
    }
    
    p {
        font-weight: 900;
    }
    
    @media only screen and (max-width: 500px) {
        section {
            flex-direction: column;
        }
    }
    
    .title {
        border: 10px solid;
        border-image: gradient(rgb(97, 55, 212), rgb(66, 213, 250)) 1;
    }
</style>

<body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="row" style="padding: 20px;">
                        <div class="col-12" style="text-align: center;">
                            <b>Select Your Level!</b>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <section>
                                <div>
                                    <input type="radio" id="control_01" name="select" value="1" checked>
                                    <label for="control_01">
                                        <h2>Easy</h2>
                                       
                                      </label>
                                </div>
                                <div>
                                    <input type="radio" id="control_02" name="select" value="2">
                                    <label for="control_02">
                                        <h2>Medium</h2>
                                      </label>
                                </div>
                                <div>
                                    <input type="radio" id="control_03" name="select" value="3">
                                    <label for="control_03">
                                        <h2>Hard</h2>
                                      </label>
                                </div>

                            </section>

                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <a href="main.html"><button class="btn btn-block" style="background-color:hsla(150, 75%, 50%, 1);color:white; ;" ><b>START</b> </button></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 style="text-align: center; padding:20px">Menu</h1>
            </div>
        </div>
        <div class="row title">
            <div class="col-md-12">
                <h1 style="text-align: center; letter-spacing: 10px;padding:20px">LUGGAGE LINK!</h1>
            </div>
        </div>
        <br>
        <div class="row" style="text-align: center; ">
            <div class="col-md-4 col-sm-12">
                <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal"><b>Play</b> </a></button>


            </div>
            <div class="col-md-4 col-sm-12">
                <button class="btn btn-primary btn-lg btn-block"><a href="" style="color:white"><b>How to Play</b> </a></button>


            </div>

            <div class="col-md-4 col-sm-12">
                <button class="btn btn-lg btn-block" style="background-color:cadetblue"><a href="" style="color:white"><b>Quit Game</b> </a></button>

            </div>

        </div>
        <br>
        <div class="container w-75">
            <h3 style="text-align: center;"> Leader Board</h3>
            <table class="table table-bordered table-striped">
                <tr style="text-align: center;">
                    <?php

                    //define PDO - tell about the db file.
                    $db = new PDO('sqlite:Leaderboard.db');
                    
                    //print the table
                    print "<table class=\"table table-bordered table-striped\">";
                    print "<tr style=\"text-align: center;\"><th>Player</th><th>Score</th></tr>";
                    
                    //write query
                    $result = $db->query("SELECT * FROM leaders");
                    
                    //print each row from the table
                    foreach($result as $row){
                        print "<tr><td>".$row['player']."</td>";
                        print "<td>".$row['score']."</td></tr>";
                    }
                    
                    print "</table>";
                    
                    ?>
        </div>


        <script src=game.js defer type="module"></script>


</body>

</html>