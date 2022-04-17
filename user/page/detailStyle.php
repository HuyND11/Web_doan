<?php

    include dirname(__DIR__)."/../PHP/dataProcessor.php";
    include dirname(__DIR__)."/../PHP/creator.php";
    include dirname(__DIR__)."/../PHP/comment.php";  

    $mainData = new dataProcessor();

    $conditionLike =[
        "idPost" => 1,
        "idUSer" => 1
    ];

    $conditionWishList =[
        "idPhoto" => 1,
        "idUSer" => 1
    ];

   

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh" crossorigin="anonymous">
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> 
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../../assets/css/detailStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>

    <script>
        const like = (idPost, idUser) => {
            $.ajax({
            url: "http://localhost/Huy/Gallery-Photos-Project/user/PHP/likePost.php",
            method: "post",
            data: {idPost: idPost, idUser: idUser},
            });
            $('#like').toggleClass('liked');
        }

        const userWishList = (idPhoto, idUser) => {
            $.ajax({
            url: "http://localhost/Huy/Gallery-Photos-Project/user/PHP/userWishList.php",
            method: "post",
            data: {idPhoto: idPhoto, idUser: idUser},
            });
            $('#wishlist').toggleClass('wishlisted');
        }

        const addComment = (idPost, idUser) => {
            var content = $('.newComment').val();
                $.ajax({
                url: "http://localhost/Huy/Gallery-Photos-Project/user/PHP/addComment.php",
                method: "post",
                data: {idPost: idPost, content: content, idUser : idUser},
                success:function(data) {
                    // console.log(reset);
                    $(".--c--tab").append(data);
                }
                });
            }

        const deleteComment = (idPost, idUser) => {
                $.ajax({
                    url: "http://localhost/Huy/Gallery-Photos-Project/user/PHP/deleteComment.php",
                    method: "post",
                    data: {idPost: idPost, idUser: idUser},  
                })
            }
    </script>
</head>

<body>
    <?php include "header.php" ?>
    <div class="c__container_detail">
        <div id="c__gallery" class="c__container">


            <h3 id="c__caption"></h3>



            <div id="c__gallery-box">


                <div id="c__gallery-link" >
                    <img id="c__slide_0011" src="">

                    <div id="c__gallery-icon">
                        <button id="like" class = " <?php echo $mainData->checkLike($conditionLike) ? "liked" : ""; ?> " onclick="like(1,1) " >
                            <i class="fa fa-thumbs-up"></i>
                            <!-- <span class="icon">Like</span> -->
                        </button>
                        <button id="wishlist" class = " <?php echo $mainData->checkWishList($conditionWishList) ? "wishlisted" : ""; ?> " onclick="userWishList(1, 1)">
                            <i class="fa fa-heart"></i>

                            <!-- <span class="icon">Wishlist</span> -->
                        </button>

                    </div>
                </div>

            </div>

            <div class="c__gallery-thumbnails">
                <div class="c__no-pad">
                    <img id="1" class="img-responsive fff" src="../../assets/image/CleaningtheImperialCitadel.jpg" alt="Pagoda Aksps" />
                    <img id="2" class="img-responsive" src="../../assets/image/AoDai.jpg" alt="Ao Dai in woman" />
                    <img id="3" class="img-responsive" src="../../assets/image/CleaningtheImperialCitadel.jpg" alt="Pagoda Aksps" />
                </div>
            </div>


        </div>
        <hr class="c__hr" color="4ea685">
        <div class="--c--mytabs">

            <input type="radio" id="tabsilver" name="mytabs" checked="checked">
            <label for="tabsilver">Reviews</label>
            <div class="--c--tab">
                <div class="--c--comment--content">
                    <div class="c__user_flexcoment">
                        <p>

                            <i class="fa fa-user-circle" aria-hidden="true"></i>

                        </p>
                        <div class="c__user_coment">
                            <p class="c__user_coment" name="nameuser">Vinhliet</p>

                            <p class="--c--conten--date" name="date">April 15</p>
                            <p class="--c--content--detail" name="content-user">CSS comments are not displayed in the
                                browser,
                                but they can help document your sourcomments are not displayed in the
                                browser,
                                but they can help document your sourcomments are not displayed in the
                                browser,
                                but they can help document your sourcomments are not displayed in the
                                browser,
                                but they can help document your sourcomments are not displayed in the
                                browser,
                                but they can help document your sourcomments are not displayed in the
                                browser,
                                but they can help document your source code.</p>

                        </div>
                    </div>
                    <p class="c__delete_coment" onclick = "deleteComment(1,2)">Delete</p>
                </div>
                <div class="--c--comment--content">
                    <div class="c__user_flexcoment">
                        <p>

                            <i class="fa fa-user-circle" aria-hidden="true"></i>

                        </p>
                        <div class="c__user_coment">
                            <p class="c__user_coment" name="nameuser">Vinhliet</p>

                            <p class="--c--conten--date" name="date">April 15</p>
                            <p class="--c--content--detail" name="content-user">CSS comments are not displayed in the
                                browser,
                                but they can help document your source code.</p>

                        </div>
                    </div>
                    <p class="c__delete_coment">Delete</p>
                </div>
                <?php  $mainData->renderComment(["idPost" => 1]) ?>
                <div class="--c--form--comment">
                    <form action="" method="POST">
                        <textarea name="" class="--c--comment newComment" id="prolackkd"
                            placeholder="Enter here...!"></textarea>
                        <br>
                        <button type="button" class="--c--btn " name="sendComment"  onclick="addComment(1,2)"> Post your comment </button>
                    </form>
                </div>
            </div>
            <input type="radio" id="--c--tabdescription" name="mytabs">
            <label for="--c--tabdescription">Description</label>
            <div class="--c--tab">

                <div class="c--content--product--detail">

                    <p class="--c--content-detail-" name="description">
                        In Hue, two days before the new year means busy markets and lots of colors. Tet Holiday has
                        been
                        quiet the past few years because of Covid-19 concerns, but the markets, when they are
                        allowed to
                        In Hue, two days before the new year means busy markets and
                        lots of colors. Tet Holiday has been quiet the past few years because of Covid-19 concerns,
                        but
                        the markets, when they are allowed to open, are always packed. In Hue, two days before the
                        new
                        year means busy markets and lots of
                        colors. Tet Holiday has been quiet the past few years because of Covid-19 concerns, but the
                        markets, when they are allowed to open, are always packed. In Hue, two days before the new
                        year
                        means busy markets and lots of colors.
                        Tet Holiday has been


                    </p>
                    <button class="c--readmore__toggle --c--btn" role="switch" aria-checked="true">
                        Show more
                    </button>
                </div>
            </div>
        </div>
    </div>
    <?php include "footer.php" ?>
    <script src="../../assets/js/detailjs.js"></script>
</body>

</html>

</html>