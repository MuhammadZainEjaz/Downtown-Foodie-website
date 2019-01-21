<?php
    require_once "../server/connectDB.php";
    header("Content-type: text/css; charset: UTF-8");

    function get_image_address_from_database($number){
        global $connection;
        $query = "select image_id from homepage where post_id=".$number;
        $image_id = mysqli_fetch_assoc(mysqli_query($connection, $query));
        $query = "select image_address from images where image_id=".$image_id['image_id'];
        $image_address = mysqli_fetch_assoc(mysqli_query($connection, $query));
        return $image_address;
    }
?>

.container{
    width: 100%;
    height: 100%;
/*    margin: auto;*/
}

body{
    background-color: #191818;
}

/*  ----------------- HEADER ---------------------*/
.main-header{
    width: 100%;
    height: 600px;
    <?php
    echo "background-image: url('../images/".get_image_address_from_database(1)['image_address']."');";
    ?>
    background-repeat: no-repeat;
    background-size: 100%;
    background-position-y: -200px;
  /*  margin: auto;*/
}

.main-header h1{
    font-family: "Matura MT Script Capitals";
    color: #eda60d;
    font-size: 5em;
    position: relative;
    top: 20px;
    box-sizing: border-box;
    margin: 0px;
    padding: 0px;
    padding-left: 10%;
    box-sizing: border-box;
}

.main-header h2{
    font-family: sans-serif;
    color: #eda60d;
    position: relative;
    margin: 0px;
    padding: 0px;
    padding-left: 20%;
    box-sizing: border-box;
}

/* ------------- Primary Calls To Action center --------------*/

#primaryCallsToAction{
    width: 100%;
    height: 400px;
    margin: auto;
}

.menuArtical{
    float: left;
    width: 30%;
    height: 100%;
    box-sizing: border-box;
    padding: 0px 30px;
    line-height: 1.6em;
    border: 1px solid black;
    background-color: #845d06;
}
.menuArtical h2{
    text-align: center;
    font-weight: bold;
}


.menuArtical p{
    text-align: justify;
}

.menuArtical span{
    font-style: italic;
    color: #eda60d;
}

.menuActionCenter{
    float: left;
    width: 70%;
    height: 100%;
    box-sizing: border-box;
    padding: 0px 30px;
   /* line-height: 1.6em;*/
    border: 1px solid black;
    border-left: none;
<?php
echo "background-image: url('../images/".get_image_address_from_database(2)['image_address']."');";
?>
    background-size: 100%;
}

.menuActionCenter h3{
    color: #eda60d;
  /*  width: 50%;*/
    position: relative;
    text-align: left;
    font-size: 2em;
    font-weight: bolder;
    border: 1px solid white;
}

.buttons{
    padding: 5px 20px;
    background-color: #eda60d;
    color: white;
    border: none;

}

/* --------------------------------------- Supporting data --------------------------*/

.supportingData{
    width: 100%;
    height: 430px;
}

/* -----------------Register------------------------- */

.register{
    width: 100%;
    height: 100px;
    background-color: red;
    margin-top: 30px;
    box-sizing: border-box;
}

.registerparagraph{
    float: none;
    width: 100%;
    height: 45%;
    box-sizing: border-box;
}

.register p{
    color: white;
    word-spacing: 10px;
    height: 100%;
    font-size: large;
    margin: 0px;
    padding: 10px;
    box-sizing: border-box;
}

.register span{
    font-style: italic;
    color: #eda60d;
}

.registerbutton{
    float: none;
    width: 100%;
    height: 55%;
    margin-left: 10px;
}

.buttons-register{
    height: 100%;
    padding: 5px 20px;
    font-size: 20px;
    background-color: #eda60d;
    margin: 8px 0px 0px;
    color: white;
    border: none;
}

/* ------------------Homepage Video --------------------------*/
.homePage-video{
    width: 100%;
    height: 315px;
}

/* ------------------- What's New --------------------------- */
.whats-new{
    width: 100%;
    height: 300px;
    margin-top: 30px;
    box-sizing: border-box;
}
.whats-new img{
    width: 100%;
    height: 100%;
}

/* ------------------------------- BootStrap ------------------------------------*/
@media only screen and (min-width: 300px){
    /* ---------------------- Header ---------------------------- */
    .main-header{
        width: 100%;
        height: 400px;
        <?php
                echo "background-image: url('../images/".get_image_address_from_database(1)['image_address']."');";
                ?>
        background-repeat: no-repeat;
        background-size: 100% 600px;
    }

    .main-header h1{
        font-family: "Matura MT Script Capitals";
        color: #eda60d;
        font-size: 1.7em;
        position: relative;
        top: 20px;
        margin: 0px;
        padding: 0px;
        padding-left: 10%;
        box-sizing: border-box;
    }

    .main-header h2{
        font-family: sans-serif;
        color: #eda60d;
        font-size: 1.1em;
        position: relative;
        margin: 0px;
        padding: 0px;
        top: 20px;
        padding-left: 20%;
        box-sizing: border-box;
    }
/* ------------------------ Calls To Actions ------------------------------*/

    #primaryCallsToAction{
        width: 100%;
        height: 700px;
        margin: auto;
    }

    .menuArtical{
        float: none;
        width: 100%;
        height: 50%;
        box-sizing: border-box;
        padding: 7px 10px;
        line-height: 1.6em;
        border: 1px solid black;
        background-color: #845d06;
    }
    .menuArtical h2{
        text-align: center;
        font-weight: bold;
    }

    .menuArtical p{
        text-align: justify;
    }

    .menuArtical span{
        font-style: italic;
        color: #eda60d;
    }


    .menuActionCenter{
        float: none;
        width: 100%;
        height: 50%;
        box-sizing: border-box;
        padding: 5px 10px;
        /* line-height: 1.6em;*/
        border: 1px solid black;
        border-left: none;
<?php
echo "background-image: url('../images/".get_image_address_from_database(2)['image_address']."');";
?>
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }

    .menuActionCenter h3{
        color: #eda60d;
        /*width: 50%;*/
        position: relative;
        /*text-align: left;*/
        font-size: 2em;
        font-weight: bold;
        border: 1px solid white;
        margin: 0;
        padding: 10px 0px 10px 8px;
    }

    .buttons{
        margin-top: 10px;
        padding: 5px 20px;
        background-color: #eda60d;
        color: white;
        border: none;

    }


    /* ------------------------ Supporting Data ---------------- */
    .homePage-video{
        display: none;
    }
}

@media only screen and (min-width: 400px){
    /* ---------------------- Header ---------------------------- */
    .main-header{
        width: 100%;
        height: 400px;
<?php
echo "background-image: url('../images/".get_image_address_from_database(1)['image_address']."');";
?>
        background-repeat: no-repeat;
        background-size: 100% 600px;
    }

    .main-header h1{
        font-family: "Matura MT Script Capitals";
        color: #eda60d;
        font-size: 2em;
        position: relative;
        top: 20px;
        margin: 0px;
        padding: 0px;
        padding-left: 10%;
        box-sizing: border-box;
    }

    .main-header h2{
        font-family: sans-serif;
        color: #eda60d;
        font-size: 1.3em;
        position: relative;
        margin: 0px;
        padding: 0px;
        top: 20px;
        padding-left: 20%;
        box-sizing: border-box;
    }

    /* ------------------------------- Suporting Data -----------------------------------*/
    .homePage-video{
        display: none;
    }

}


@media only screen and (min-width: 500px){
    /* ---------------------- Header ---------------------------- */
    .main-header{
        width: 100%;
        height: 400px;
<?php
echo "background-image: url('../images/".get_image_address_from_database(1)['image_address']."');";
?>
        background-repeat: no-repeat;
        background-size: 100% 600px;
    }

    .main-header h1{
        font-family: "Matura MT Script Capitals";
        color: #eda60d;
        font-size: 2.2em;
        position: relative;
        top: 20px;
        margin: 0px;
        padding: 0px;
        padding-left: 10%;
        box-sizing: border-box;
    }

    .main-header h2{
        font-family: sans-serif;
        color: #eda60d;
        font-size: 1.3em;
        position: relative;
        margin: 0px;
        padding: 0px;
        top: 20px;
        padding-left: 20%;
        box-sizing: border-box;
    }
    /* ------------------------ Calls To Actions ------------------------------*/

    #primaryCallsToAction{
        width: 100%;
        height: 500px;
        margin: auto;
    }

    .menuArtical{
        float: none;
        width: 100%;
        height: 50%;
        box-sizing: border-box;
        padding: 7px 10px;
        line-height: 1.6em;
        border: 1px solid black;
        background-color: #845d06;
    }
    .menuArtical h2{
        text-align: center;
        font-weight: bold;
    }

    .menuArtical p{
        text-align: justify;
    }

    .menuArtical span{
        font-style: italic;
        color: #eda60d;
    }


    .menuActionCenter{
        float: none;
        width: 100%;
        height: 50%;
        box-sizing: border-box;
        padding: 5px 10px;
        /* line-height: 1.6em;*/
        border: 1px solid black;
        border-left: none;
<?php
echo "background-image: url('../images/".get_image_address_from_database(2)['image_address']."');";
?>
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }

    .menuActionCenter h3{
        color: #eda60d;
        /*width: 50%;*/
        position: relative;
        /*text-align: left;*/
        font-size: 2.9em;
        font-weight: bold;
        border: 1px solid white;
        margin: 0;
        padding: 10px 0px 10px 8px;
    }

    .buttons{
        margin-top: 10px;
        padding: 5px 20px;
        background-color: #eda60d;
        color: white;
        border: none;
        font-size: 35px;
    }

    /*------------------------------ Supporting Data ----------------------------*/

    .register p{
        font-size: 23px;
    }

    .homePage-video{
        display: none;
    }
}


@media only screen and (min-width: 700px){
    /* ---------------------- Header ---------------------------- */
    .main-header{
        width: 100%;
        height: 500px;
<?php
echo "background-image: url('../images/".get_image_address_from_database(1)['image_address']."');";
?>
        background-repeat: no-repeat;
        background-size: 100% 700px;
    }

    .main-header h1{
        font-family: "Matura MT Script Capitals";
        color: #eda60d;
        font-size: 3em;
        position: relative;
        top: 20px;
        margin: 0px;
        padding: 0px;
        padding-left: 19%;
        box-sizing: border-box;
    }

    .main-header h2{
        font-family: sans-serif;
        color: #eda60d;
        font-size: 1.7em;
        position: relative;
        margin: 0px;
        padding: 0px;
        top: 20px;
        padding-left: 25%;
        box-sizing: border-box;
    }
    /* ------------------------ Calls To Actions ------------------------------*/

    #primaryCallsToAction{
        width: 100%;
        height: 600px;
        margin: auto;
    }

    .menuArtical{
        float: none;
        width: 100%;
        height: 50%;
        box-sizing: border-box;
        padding: 7px 10px;
        line-height: 1.6em;
        border: 1px solid black;
        background-color: #845d06;
    }
    .menuArtical h2{
        text-align: center;
        font-weight: bold;
    }

    .menuArtical p{
        text-align: justify;
        font-size: x-large;
    }

    .menuArtical span{
        font-style: italic;
        color: #eda60d;
    }


    .menuActionCenter{
        float: none;
        width: 100%;
        height: 50%;
        box-sizing: border-box;
        padding: 5px 10px;
        /* line-height: 1.6em;*/
        border: 1px solid black;
        border-left: none;
<?php
echo "background-image: url('../images/".get_image_address_from_database(2)['image_address']."');";
?>
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }

    .menuActionCenter h3{
        color: #eda60d;
        /*width: 50%;*/
        position: relative;
        /*text-align: left;*/
        font-size: 4em;
        font-weight: bold;
        border: 1px solid white;
        margin: 0;
        padding: 10px 0px 10px 8px;
    }

    .buttons{
        margin-top: 10px;
        padding: 5px 20px;
        background-color: #eda60d;
        color: white;
        border: none;
        font-size: 35px;
    }

    /*------------------------------ Supporting Data ----------------------------*/

    .register p{
        font-size: 25px;
    }

    .supportingData{
        height: 850px;
    }

    .homePage-video{
        display: unset;
        margin-left: 10%;
    }

    .whats-new{
        height: 400px;
    }
}

@media only screen and (min-width: 900px){
    /* ---------------------- Header ---------------------------- */
    .main-header{
        width: 100%;
        height: 600px;
<?php
echo "background-image: url('../images/".get_image_address_from_database(1)['image_address']."');";
?>
        background-repeat: no-repeat;
        background-size: 100% 800px;
    }

    .main-header h1{
        font-family: "Matura MT Script Capitals";
        color: #eda60d;
        font-size: 4.3em;
        position: relative;
        top: 20px;
        margin: 0px;
        padding: 0px;
        padding-left: 17%;
        box-sizing: border-box;
    }

    .main-header h2{
        font-family: sans-serif;
        color: #eda60d;
        font-size: 2em;
        position: relative;
        margin: 0px;
        padding: 0px;
        top: 20px;
        padding-left: 25%;
        box-sizing: border-box;
    }
    /* ------------------------ Calls To Actions ------------------------------*/

    #primaryCallsToAction{
        width: 100%;
        height: 600px;
        margin: auto;
    }

    .menuArtical{
        float: left;
        width: 30%;
        height: 100%;
        box-sizing: border-box;
        padding: 7px 10px;
        line-height: 1.6em;
        border: 1px solid black;
        background-color: #845d06;
    }
    .menuArtical h2{
        text-align: center;
        font-weight: bold;
    }

    .menuArtical p{
        text-align: justify;
        font-size: x-large;
    }

    .menuArtical span{
        font-style: italic;
        color: #eda60d;
    }


    .menuActionCenter{
        float: left;
        width: 70%;
        height: 100%;
        box-sizing: border-box;
        padding: 5px 10px;
        /* line-height: 1.6em;*/
        border: 1px solid black;
        border-left: none;
<?php
echo "background-image: url('../images/".get_image_address_from_database(2)['image_address']."');";
?>
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }

    .menuActionCenter h3{
        color: #eda60d;
        /*width: 50%;*/
        position: relative;
        /*text-align: left;*/
        font-size: 3.5em;
        font-weight: bold;
        border: 1px solid white;
        margin: 0;
        padding: 10px 0px 10px 8px;
    }

    .buttons{
        margin-top: 10px;
        padding: 5px 20px;
        background-color: #eda60d;
        color: white;
        border: none;
        font-size: 35px;
    }

    /*------------------------------ Supporting Data ----------------------------*/
    .supportingData{
        width: 100%;
        height: 550px;
    }

    .section{
        /*width: 65%;*/
        width: 560px;
        height: 100%;
        float: left;
    }

    .register{
        float: none;
        width: 560px;
        height: 30%;
        margin-bottom: 40px;
    }

    .registerparagraph{
        height: 50%;
    }

    .registerbutton{
        height: 50%;
    }

    .buttons-register{
        font-size: 30px;
        margin-left: 200px;
    }

    .register p{
        font-size: 35px;
    }

    .homePage-video{
        display: unset;
        margin: 0;
        float: none;
        width: 100%;
        height: 60%;
    }

    .whats-new{
        float: right;
        height: 100%;
        margin: 0;
        margin-left: 10px;
        width: 35%;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    .whats-new img{
        width: 100%;
        height: 100%;
        box-sizing: border-box;
    }

}

@media only screen and (min-width: 1000px){
    .whats-new{
        width:42%;
    }
}

@media only screen and (min-width: 1100px){
    /* ---------------------- Header ---------------------------- */
    .main-header{
        width: 100%;
        height: 700px;
<?php
echo "background-image: url('../images/".get_image_address_from_database(1)['image_address']."');";
?>
        background-repeat: no-repeat;
        background-size: 100% 900px;
    }

    .main-header h1{
        font-family: "Matura MT Script Capitals";
        color: #eda60d;
        font-size: 5em;
        position: relative;
        top: 20px;
        margin: 0px;
        padding: 0px;
        padding-left: 17%;
        box-sizing: border-box;
    }

    .main-header h2{
        font-family: sans-serif;
        color: #eda60d;
        font-size: 2.7em;
        position: relative;
        margin: 0px;
        padding: 0px;
        top: 20px;
        padding-left: 25%;
        box-sizing: border-box;
    }

    /* ------------------------ Calls To Actions ------------------------------*/

    #primaryCallsToAction{
        width: 100%;
        height: 600px;
        margin: auto;
    }

    .menuArtical{
        float: left;
        width: 30%;
        height: 100%;
        box-sizing: border-box;
        padding: 7px 10px;
        line-height: 2em;
        border: 1px solid black;
        background-color: #845d06;
    }
    .menuArtical h2{
        text-align: center;
        font-weight: bolder;
        font-size: 3em;
    }

    .menuArtical p{
        text-align: justify;
        font-size: 1.4em;
    }

    .menuArtical span{
        font-style: italic;
        color: #eda60d;
    }


    .menuActionCenter{
        float: left;
        width: 70%;
        height: 100%;
        box-sizing: border-box;
        padding: 5px 10px;
        /* line-height: 1.6em;*/
        border: 1px solid black;
        border-left: none;
<?php
echo "background-image: url('../images/".get_image_address_from_database(2)['image_address']."');";
?>
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }

    .menuActionCenter h3{
        color: #eda60d;
        /*width: 50%;*/
        position: relative;
        /*text-align: left;*/
        font-size: 4em;
        font-weight: bold;
        border: 1px solid white;
        margin: 0;
        padding: 10px 0px 10px 8px;
    }

    .buttons{
        margin-top: 10px;
        padding: 5px 20px;
        background-color: #eda60d;
        color: white;
        border: none;
        font-size: 35px;
    }

    /* -------------------------supporting Data -------------------------*/
    .whats-new{
        width:47%;
    }
}

@media only screen and (min-width: 1250px){
    .whats-new{
        width: 53%;
    }
}

@media only screen and (min-width: 1450px){
    .whats-new{
        width: 58%;
    }
}