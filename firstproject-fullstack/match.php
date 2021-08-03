<?php
$matechs = [
    ["first_team" => ["flag" => "assets/images/liverpool.png", "name" => "Liverpool"], "second_team" => ["flag" => "assets/images/man_city.png", "name" => "Man City"]],
    ["first_team" => ["flag" => "assets/images/man_united.png", "name" => "Man United"], "second_team" => ["flag" => "assets/images/chelsea.png", "name" => "Chelsea"]],
    ["first_team" => ["flag" => "assets/images/everton.png", "name" => "Everton"], "second_team" => ["flag" => "assets/images/arsenal.png", "name" => "Arsenal"]],
    ["first_team" => ["flag" => "assets/images/arsenal.png", "name" => "Arsenal"], "second_team" => ["flag" => "assets/images/liverpool.png", "name" => "Liverpool"]],
    ["first_team" => ["flag" => "assets/images/man_city.png", "name" => "Man City"], "second_team" => ["flag" => "assets/images/chelsea.png", "name" => "Chelsea"]],
    ["first_team" => ["flag" => "assets/images/everton.png", "name" => "Everton"], "second_team" => ["flag" => "assets/images/man_united.png", "name" => "Man United"]],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/teams.css">
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
    <title>Teams</title>
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
    <table>
        <!--Create rows based on the array in the top -->
        <?php foreach ($matechs as $matech) { ?>
            <tr>
                <td>
                    <form action="team_members.php" method="post">
                        <button type="submit" is="submit-btn">
                            <div class="team in-left">
                                <img src=<?php echo $matech["first_team"]["flag"] ?> alt="liverpool" width="70" height="70"><span><?php echo $matech["first_team"]["name"] ?></span>
                            </div>
                        </button>
                    </form>
                </td>
                <td><img src="assets/images/vs.png" alt="vs"></td>
                <td>
                    <a href="team_members.php">
                        <div class="team in-right">
                            <img src=<?php echo $matech["second_team"]["flag"] ?> alt="liverpool" width="70" height="70"><span><?php echo $matech["second_team"]["name"] ?></span>
                        </div>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>