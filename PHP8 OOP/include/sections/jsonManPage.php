<?php
    $url = "http://jsonplaceholder.typicode.com/posts";

    $data = file_get_contents($url);
    if($data){
        $dataObj = json_decode($data);

        $postList = "<ul>";
        if(count($dataObj)){
            foreach($dataObj as $post){
                $userId = isset($post->userId) ? $post->userId : "-";
                $id = isset($post->id) ? $post->id : "-";
                $title = isset($post->title) ? $post->title : "-";
                $body = isset($post->body) ? $post->body : "-";
                $subBody = substr($body,100)."...";
                $author = "Roberto De Gaetano";
                $postDate = date('Y-m-s H:i:s');
                $postList .= "
                    <li class='listLi'>
                        <h2><a title='See post #".$id." (User ID #".$userId.")' href='".$url."/".$id."' target='_blank'>".$title."</a></h2>
                        </h3><br /><a title='See post #".$id." (User ID #".$userId.")' href='".$url."/".$id."' target='_blank'>".$subBody."</a></h3>
                        <br />".$author." - ".$postDate."<hr />
                    </li>
                ";
            }
        }
        $postList .= "<ul>";
    }
    else{
        $postList = "
            <li class='listLi'>
                <h2>La lista dei post è vuota per l'indirizzo <a href='".$url."'>".$url."</a></h2>
            </li>
        ";
    }
    $navBar = "
        <nav class='navbar'>
            <div class='container'>
                <div class='navbarContent'>
                    <div class='navbar-nav navlinkDiv'><li class='listLi' id='homeLink'>Home</li></div>
                    <div class='navbar-nav navlinkDiv'><li class='listLi' id='newLink'>New</li></div>
                    <div class='navbar-nav navlinkDiv'><li class='listLi' id='deleteLink'>Delete</li></div>
                    </ul>
                </div>
            </div>
        </nav>
    ";
?>
<html>
    <head>
        <title>Pagina di gestione JSON</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <style>
            body{background-color: wheat;height: 900px;overflow: hidden;}
            .divBlock{display: none;}
            .navbarContent{background-color:sandybrown;width: 50%;margin-left: 25%;margin-top: 2%;}
            .navlinkDiv{float: left;text-align: center;}
            .navlinkDiv li{color: orangered;cursor: pointer;}
            .navlinkDiv li:hover{color: mediumseagreen;}
            .postContent{height: 800px;width:70%;margin-top:2%;margin-left:15%;border: 1px solid black;text-align: left;overflow:auto;background-color: grey;opacity: 0.5;box-shadow: 5px 5px 0px 0px black;}
            .listLi{list-style-type:none;margin-top: 5px;}
            .listLi a{color: white;}
            .listLi a:hover{color: orange;}
        </style>
    </head>
    <body>
        <?php echo $navBar; ?>
        <div class="divBlock" id="home">
            <div class="postContent">
                <?=$postList?>
            </div>
        </div>

        <div class="divBlock" id="newDiv">
            newLink
        </div>

        <div class="divBlock" id="deleteDiv">
            deleteLink
        </div>
            
        </nav>
    </body>
</html>
<script>
    function pageInit(){
        $('#home').fadeIn(1000);
        $('.navlinkDiv').css('width',(($('.navbarContent').width())/3));
    }
    $(window).on('load', function() { pageInit(); });
    $(window).on('resize', function() { pageInit(); });
    $(window).on('drag', function() { pageInit(); });

    $('#homeLink').on('click',function(){$('.divBlock').fadeOut(1000);$('#home').fadeIn(1000);});
    $('#newLink').on('click',function(){$('.divBlock').fadeOut(1000);$('#newDiv').fadeIn(1000);});
    $('#deleteLink').on('click',function(){$('.divBlock').fadeOut(1000);$('#deleteDiv').fadeIn(1000);});
</script>