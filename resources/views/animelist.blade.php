<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
<head>
<body>
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Release Date</th>
      <th scope="col">No.of Episodes</th>
      <th scope="col">Rating</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($data as $anime)
      <tr>
        <td scope="row">{{$anime->name}}</td>
        <td>{{$anime->release_date}}</td>
        <td>{{$anime->no_of_episodes}}</td>
        <td>{{$anime->rating}}</td>
        <td>    

          <button class='btn btn-info btn-sm' 
          data-toggle="modal" data-target="#editAnime"
          data-animeid = "{{$anime->animeID}}"
          data-animename = "{{$anime->name}}"          
          data-rating = "{{$anime->rating}}"
          data-date = "{{$anime->release_date}}"
          data-eps = "{{$anime->no_of_episodes}}"
          >Edit</button>  

          <a href="{{'deleteAnime/'.$anime->animeID}}" class="btn btn-danger btn-sm">Delete</a>
        </td>
      </tr>
      @endforeach
      
  </tbody>
  
</table>
<button class="btn-primary mt-3 ml-3"><a href="{{route('animePage')}}" style="color:white;">Back</a></button>













<!--Edit  anime modal-->
<div id="editAnime" class="modal fade" tabindex="-1" aria-labelledby="editAnime" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="editAnime">Edit Anime</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('editAnime')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                        <input type="text" class="form-control" id="animeId" name="animeId" hidden>

                        <div class="mb-3">
                            <label for="" class="form-label">Anime Name</label>
                            <input type="text" class="form-control" id="animeName" name="animeName" required>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Anime Rating</label>
                            <input type="text" class="form-control" id="animeRating" name="animeRating" required>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Anime Release Date</label>
                            <input type="text" class="form-control" id="animeDate" name="animeDate" required>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Anime No.of Episodes</label>
                            <input type="text" class="form-control" id="animeEps" name="animeEps" required>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">Close</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



<script>
    $('#editAnime').on('show.bs.modal', function (event) {


        let button = $(event.relatedTarget)
        let animeId = button.data('animeid')
        let animeName = button.data('animename')
        let animeRating = button.data('rating')
        let animeDate = button.data('date')
        let animeEps = button.data('eps')

        let modal = $(this)
        modal.find('.modal-body #animeId').val(animeId);
        modal.find('.modal-body #animeName').val(animeName);
        modal.find('.modal-body #animeRating').val(animeRating);
        modal.find('.modal-body #animeDate').val(animeDate);
        modal.find('.modal-body #animeEps').val(animeEps);

    })
</script>

</body>
</html>