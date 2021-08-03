?php
    $players = [["name" => "Mohemmed Salah" , "number" => "11"] , ["name"=>"Virgil van Dijk" , "number"=>"4"] , ["name"=>"Roberto Firmino" , "number"=>"9"] ,["name"=>"Alex Oxlade Chamberlain" , "number"=>"21"]];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/team_members.css">
    <title>Liverpool</title>
</head>

<body>
    <nav>
        <div>
            <img src="assets/images/logo.png" alt="logo" width="20" height="20">
            <h1>MATCH</h1>
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </nav>
    <div class="team-info">
        <img src="assets/images/liverpool.png" alt="liverpool" width="200" height="200">
        <div class="text-info">
            <h1>Liverpool</h1>
            <h2>Team</h2>
        </div>
    </div>
    <table>
        <?php for($row = 1; $row <= 3 ; $row++){ ?>
            <tr>
                <?php switch($row){
                    case 1: {
                        foreach ($players as $player) { ?>
                            <td>
                                <div class="player">
                                    <div class="player-img">
                                        <img src=<?php echo "assets/team/".$player["number"].".png" ?> alt="11">
                                        <img src=<?php echo "assets/team/player".$player["number"].".png" ?> alt="player 11">
                                    </div>
                                    <h3><?php echo $player["name"]?></h3>
                                </div>
                            </td>
                        <?php } ?>    
                    <?php }break;
                    case 2: {
                        foreach(array_reverse($players) as $player){?>
                            <td>
                                <div class="player">
                                    <div class="player-img">
                                        <img src=<?php echo "assets/team/".$player["number"].".png" ?> alt="11">
                                        <img src=<?php echo "assets/team/player".$player["number"].".png" ?> alt="player 11">
                                    </div>
                                    <h3><?php echo $player["name"]?></h3>
                                </div>
                            </td>
                   <?php } 
                   }break;
                    default:{
                        for($index = 0; $index < sizeof($players) -1 ; $index++){
                       ?>
                            <td>
                                <div class="player">
                                    <div class="player-img">
                                        <img src=<?php echo "assets/team/".$players[$index]["number"].".png" ?> alt="11">
                                        <img src=<?php echo "assets/team/player".$players[$index]["number"].".png" ?> alt="player 11">
                                    </div>
                                    <h3><?php echo $players[$index]["name"]?></h3>
                                </div>
                            </td>
                    <?php } 
                } ?>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>
</html>