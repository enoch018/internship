<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="home/css/bootstrap.min.css">
    <link rel="stylesheet" href="home/css/font-awesome.min.css">
    <link rel="stylesheet" href="home/css/elegant-icons.css">
    <link rel="stylesheet" href="home/css/nice-select.css">
    <link rel="stylesheet" href="home/css/jquery-ui.min.css">
    <link rel="stylesheet" href="home/css/owl.carousel.min.css">
    <link rel="stylesheet" href="home/css/slicknav.min.css">
    <link rel="stylesheet" href="home/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        /* Custom styling */
        .comment {
            margin-bottom: 20px;
        }

        .reply {
            margin-left: 20px;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        form {
            max-width: 100%;
            margin: 0 auto;
            padding: 20px;
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        textarea {
            width: 100%;
            height: 150px;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            resize: vertical;
        }

        /* Custom CSS for reply section */


/* Custom CSS for comment and reply section */
.comment {
    margin-bottom: 20px;
    border-bottom: 1px solid #ebebeb;
    padding-bottom: 20px;
}

.comment h5 {
    margin-bottom: 10px;
    font-size: 18px;
}

.comment p {
    margin-bottom: 15px;
    font-size: 16px;
}

.reply-container {
    background-color: #f8f9fa;
    border: 1px solid #dee2e6;
    border-radius: 5px;
    padding: 15px;
    margin-top: 20px;
}

.reply-container p {
    margin: 0;
    padding: 0;
}

.reply-container .reply-author {
    font-weight: bold;
    margin-bottom: 5px;
}

.reply-container .reply-content {
    margin-left: 20px;
}

.reply-form {
    margin-top: 20px;
}

.reply-form textarea {
    width: 100%;
    height: 100px;
    padding: 10px;
    border: 1px solid #ced4da;
    border-radius: 5px;
    resize: vertical;
    margin-bottom: 10px;
}

.reply-form button {
    margin-top: 10px;
}

    </style>
    <style>
        html {
            zoom: 80%;
        }
    </style>
</head>
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
@include('sweetalert::alert')
    <!-- Header Section Begin -->
    @include('home.header')
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    @include('home.hero')
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    @include('home.categories')
    <!-- Categories Section End -->

    <!-- Banner Begin -->
    @include('home.banner')
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    @include('home.product')
    <!-- Latest Product Section End -->

    <!-- Comment Form Begin -->
    <div class="container mt-5">
        <form action="{{ url('add_comment') }}" method="POST">
            @csrf
            <div class="form-group">
                <textarea class="form-control" name="comment" placeholder="Comment something here" required=""></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Comment</button>
        </form>
    </div>
    <!-- Comment Form End -->

    <!-- Comment Section Begin -->
    <div class="container mt-5">
        <!-- Comment section -->
        <div class="comment">
            <h1>All Comments</h1>
            @foreach ($comments as $singleComment)
            <div class="comment">
                <h5 class="card-title">{{ $singleComment->name }}</h5>
                 <p class="card-text">{{ $singleComment->comment }}</p>

                 @foreach($reply as $rep)
                 @if($rep->comment_id==$singleComment->id)
                 <div>
                     <p>{{$rep->name}}</p>
                     <p>{{$rep->reply}}</p> 
                     <button type="button" class="reply-link" onclick="toggleReply(this);" data-comment-id="{{ $singleComment->id }}">Reply</button><!-- Corrected variable name to access reply's content -->
                 </div>
                 @endif
             @endforeach
             

                <div class="comment_display" style="display: none;">
                    <form action="{{ url('add_reply') }}" method="POST">
                        @csrf
                        <textarea required="" name="reply_text" placeholder="Write your reply here"></textarea>
                        <input type="hidden" name="CommentId" value="{{ $singleComment->id }}">
                        <button type="button" class="close-link" onclick="closeReply(this);">Close</button>
                        <button type="submit" class="btn btn-primary">Submit Reply</button>
                    </form>
                </div>
                <button type="button" class="reply-link" onclick="toggleReply(this);" data-comment-id="{{ $singleComment->id }}">Reply</button>
            </div>
        @endforeach
        

        
        
            </div>
    

        </div>
    </div>
    <!-- Comment Section End -->

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Js Plugins -->
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script>
    <script src="home/js/jquery-3.3.1.min.js"></script>
    <script src="home/js/bootstrap.min.js"></script>
    <script src="home/js/jquery.nice-select.min.js"></script>
    <script src="home/js/jquery-ui.min.js"></script>
    <script src="home/js/jquery.slicknav.js"></script>
    <script src="home/js/mixitup.min.js"></script>
    <script src="home/js/owl.carousel.min.js"></script>
    <script src="home/js/main.js"></script>
    
    <script>
function toggleReply(button) {
    var commentDisplay = button.parentElement.querySelector('.comment_display');
    var replyLink = button.parentElement.querySelector('.reply-link');
    if (commentDisplay.style.display === 'none') {
        commentDisplay.style.display = 'block';
        replyLink.style.display = 'none';
    } else {
        commentDisplay.style.display = 'none';
        replyLink.style.display = 'inline-block';
    }
}

function closeReply(button) {
    var commentDisplay = button.parentElement;
    var replyLink = button.parentElement.parentElement.querySelector('.reply-link');
    commentDisplay.style.display = 'none';
    replyLink.style.display = 'inline-block';
}
</script>

@include('home.footer')
</body>
</html>
