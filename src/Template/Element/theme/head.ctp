<!--================ Google web fonts ================-->
<!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Old+Standard+TT:400,400i,700|Open+Sans:200,300,400,400i,600,600i,700,700i,800,800i|Playfair+Display:400,400i,700,700i,900,900i">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">-->

<!--[if IE 9]>
<link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/ie.css">
<![endif]-->

<script>
    <?php
        // generate a array of months for localize datepicker onChange in booking
        $months = [];
        //$time = new Cake\I18n\Time();
        for ($month = 1; $month <= 12; $month++) {
            //$time->setDate(date('Y'), $month, 1);
            //$months[] = ucfirst($time->i18nFormat('MMM'));
            $months[] = ucfirst(strftime('%b', mktime(0,0,0, $month)));
        }
    ?>
    wCF.i18n_months = <?php echo json_encode($months); ?>;
</script>