<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style>
        /* Custom styling */
        
        .search-container {
    display: flex;
    justify-content: center; /* Center the search bar */
    margin-bottom: 3px;
    margin: auto;
}

#search-input {
    width: 100%; /* Set the width of the search bar to 100% */
    max-width: 400px; /* Set maximum width for larger screens */
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-right: 10px;
}

#search-button {
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

#search-button:hover {
    background-color: #45a049;
}

/* Horizontal product display */
.featured__filter {
    display: flex;
    flex-wrap: wrap; /* Wrap items to next row if needed */
    justify-content: flex-start; /* Start items from the left */
    margin: 0 -5px; /* Add negative margin to compensate for padding */
}

.col-lg-3 {
    flex: 0 0 calc(25% - 20px); /* Adjust column width */
    max-width: calc(25% - 20px); /* Adjust maximum width */
    padding: 0 10px; /* Add padding */
    margin-bottom: 30px;
}
    </style>
</head>
<body>
    <div class="search-container" style="width: 100%">
        <form action="{{url('search_products')}}" method="GET" style="display: flex; align-items: center; width: 100%; max-width: 600px;">
            <h1 style="font-size: 20px; font-weight: bold; text-align: center; padding:40px ; margin-left:30px;">Our Products</h1>
            @csrf
            <input type="text" name="search" id="search-input" placeholder="Search...">
            <button type="submit" id="search-button">Search</button>
        </form>
    </div>

    <div style ="margin-left:30px;"class="row featured__filter">
        @foreach ($product as $product)
        <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
            <div class="card">
                <a href="{{ url('product_details', $product->id) }}">
                    <img style="height: 200px; width: 100%;" src="product/{{ $product->image }}" class="card-img-top" alt="Product Image">
                </a>
                <div class="card-body d-flex flex-column justify-content-between" style="height: 130px;">
                    <div>
                        <h5 class="card-title">{{ $product->title }}</h5>
                        @if($product->discount_price !== null)
                        <s>
                            <p class="card-text">Price: Rs.{{ $product->price }}</p>
                        </s>
                        <p class="card-text" style="color: red;">Discounted Price: Rs.{{ $product->discount_price }}</p>
                        @else
                        <p class="card-text">Price: Rs.{{ $product->price }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            var scrollpos = localStorage.getItem('scrollpos');
            if (scrollpos) window.scrollTo(0, scrollpos);
        });
      
        window.onbeforeunload = function (e) {
            localStorage.setItem('scrollpos', window.scrollY);
        };
    </script>
</body>
</html>
