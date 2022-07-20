<?php session_start();

if (empty($_SESSION['userName'])) {
    header('location: ../login.php');
}

?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>themelock.com - Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="<?php echo $baseUrl; ?>assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $baseUrl; ?>assets/css/minified/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $baseUrl; ?>assets/css/minified/core.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $baseUrl; ?>assets/css/minified/components.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $baseUrl; ?>assets/css/minified/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <style>
        .panel-flat>.panel-heading {
            border-bottom: 1px solid #dddddd;
        }

        .add-new {
            color: #fff !important;
        }

        .table_panel {
            background-color: #fff;
            padding: 20px;
            border: 1px solid #dddddd;
        }
    </style>
</head>