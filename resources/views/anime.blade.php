<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
<head>
<body>
    <h1 class="display-6 mt-3 ml-4 ">Rate Your Favourite Anime!</h1>
    <div class="row mt-5 ml-2">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="font-weight-bold text-primary text-uppercase mb-1">
                                Anime List</div>
                        </div>
                        <div class="col-auto">
                            
                            <button class="btn-primary"><a href="{{route('animeList')}}" style="color:white;"><i class="fas fa-plus-circle fa-1x text-gray-300"></i>Show</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>               
    </div>


    <div class= "col-3">
        <form action="{{route('addAnime')}}" method=POST enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="text" class="form-control" id="animeID" name="animeID" hidden>
            <div class="mb-3 ml-3 mt-3">
                <label for="aname" class="form-label">Name</label>
                <input type="text" class="form-control" id="aname" name="aname">
            </div>
            <div class="mb-3 ml-3">
                <label for="rdate" class="form-label">Release Date</label>
                <input type="date" class="form-control" name="rdate" id="rdate">
            </div>
            <div class="mb-3 ml-3">
                <label for="eps" class="form-label">Number of Episodes</label>
                <input type="text" class="form-control" id="eps" name="eps">
            </div>
            <div class="mb-3 ml-3">
                <label for="rate" class="form-label">Rating</label>
                <input type="text" class="form-control" id="rate" name="rate">
            </div>
            <button type="submit" class="btn btn-primary ml-3">Add</button>
        </form>
    </div>
</body>
<html>

