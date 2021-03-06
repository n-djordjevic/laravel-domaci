<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<!-- Styles -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
<x-app-layout>

    <div class="container-sm">
        <br><br>

        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <form action="">
                        <select name="movieList" id="movieList" onchange="getMovies()">
                            <option value="" disabled selected>Select your movie list</option>
                            @foreach(auth()->user()->movieList as $list)
                            <option value="{{$list->id}}">{{$list->title}}</option>
                            @endforeach
                        </select>
                    </form>
                </div>
                <div class="col-sm">
                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addMovie">
                        Add movie
                    </button>
                </div>
                <div class="col-sm">
                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addMovieList">
                        Add movie list
                    </button>
                </div>
                <div class="col-sm"></div>
                <!-- <div class="col-sm"></div> -->
            </div>
        </div>

        <!-- Add Movie modal -->
        <div class="modal fade" id="addMovie" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addMovieLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addMovieLabel">Movie info</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST" class="row g-3">
                            <div class="col-md-12">
                                <select name="movieListAdd" id="movieListAdd">
                                    <option value="" disabled selected>Select your movie list</option>
                                    @foreach(auth()->user()->movieList as $list)
                                    <option value="{{$list->id}}">{{$list->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label for="inputTitleMovie" class="form-label">Title</label>
                                <input type="text" class="form-control" id="inputTitleMovie">
                            </div>
                            <div class="col-md-12">
                                <label for="inputDirector" class="form-label">Director</label>
                                <input type="text" class="form-control" id="inputDirector">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button id="addMovieBtn" type="button" class="btn btn-dark" onclick="addMovie()" data-bs-dismiss="modal">Add movie</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit Movie modal -->
        <div class="modal fade" id="editMovie" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editMovieLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editMovieLabel">Movie info</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="PUT" class="row g-3">
                            <div class="col-md-12">
                                <select name="movieListEdit" id="movieListEdit">
                                    <option value="" disabled selected>Select your movie list</option>
                                    @foreach(auth()->user()->movieList as $list)
                                    <option value="{{$list->id}}">{{$list->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label for="editTitleMovie" class="form-label">Title</label>
                                <input type="text" class="form-control" id="editTitleMovie">
                            </div>
                            <div class="col-md-12">
                                <label for="editDirector" class="form-label">Director</label>
                                <input type="text" class="form-control" id="editDirector">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button id="editMovieBtn" type="button" class="btn btn-dark" onclick="editMovie()" data-bs-dismiss="modal">Edit movie</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add List modal -->
        <div class="modal fade" id="addMovieList" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addMovieListLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addMovieListLabel">Movie list info</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST" class="row g-3">
                            <div class="col-md-10">
                                <label for="inputTitleList" class="form-label">Title</label>
                                <input type="text" class="form-control" id="inputTitleList">
                            </div>
                            <div class="col-md-2">
                                <label for="UID" class="form-label">UID</label>
                                <input type="text" class="form-control" id="UID" value="<?php echo (auth()->user()->id) ?>" disabled>
                            </div>
                            <div class="col-md-12">
                                <label for="inputDescription" class="form-label">Description</label>
                                <input type="text" class="form-control" id="inputDescription">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button id="addMovieListBtn" type="button" class="btn btn-dark" onclick="addList()" data-bs-dismiss="modal">Add list</button>
                    </div>
                </div>
            </div>
        </div>



        <br><br><br>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Director</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>



    </div>
</x-app-layout>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script>
    var edit_movie_id;

    function getMovies() {

        var select = document.getElementById('movieList');
        var index = select.selectedIndex;
        var list_id = select.options[index].value;

        $.ajax({
            type: 'get',
            url: "/api/movies/" + list_id,
            success: function(data) {
                $('tbody').html(data);
            }
        })
    }

    function addList() {

        var title = document.getElementById('inputTitleList').value;
        var director = document.getElementById('inputDescription').value;
        var user_id = document.getElementById('UID').value;

        $.ajax({
            type: 'post',
            url: "/api/movie-list/",
            data: {
                "title": title,
                "description": director,
                "user_id": user_id
            },
            success: function() {
                // failed select reload attempt
                // $('select').html("<option value='' disabled selected>Select your movie list</option> @foreach(auth()->user()->movieList as $list) <option value='{{$list->id}}'>{{$list->title}}</option> @endforeach")
                location.reload();
                alert("Added movie list successfully!");
            }
        })


    }

    function addMovie() {

        var title = document.getElementById('inputTitleMovie').value;
        var director = document.getElementById('inputDirector').value;
        var select = document.getElementById('movieListAdd');
        var index = select.selectedIndex;
        var movie_list_id = select.options[index].value;

        $.ajax({
            type: 'post',
            url: "/api/movie/",
            data: {
                "title": title,
                "director": director,
                "movie_list_id": movie_list_id
            },
            success: function() {
                alert("Added movie successfully!");
            }
        })

        getMovies();
    }

    function destroy(btn) {

        var movie_id = btn.id

        $.ajax({
            type: 'delete',
            url: "/api/movie/" + movie_id,
            success: function() {
                alert("Deleted successfully!");
            }
        })

        getMovies();
    }

    function getUpdateID(btn) {

        edit_movie_id = btn.id

        $.ajax({
            type: 'get',
            url: "/api/movie/" + edit_movie_id,
            dataType: 'JSON',
            success: function(data) {
                var title = data[0].title;
                var director = data[0].director;
                var movie_list_id = data[0].movie_list_id;

                document.getElementById('editTitleMovie').value = title;
                document.getElementById('editDirector').value = director;
                document.getElementById('movieListEdit').value = movie_list_id;
            }
        })

    }

    function editMovie() {

        var title = document.getElementById('editTitleMovie').value;
        var director = document.getElementById('editDirector').value;
        var select = document.getElementById('movieListEdit');
        var index = select.selectedIndex;
        var movie_list_id = select.options[index].value;

        $.ajax({
            type: 'put',
            url: "/api/movie/" + edit_movie_id,
            data: {
                "title": title,
                "director": director,
                "movie_list_id": movie_list_id
            },
            success: function() {
                alert("Edited movie successfully!");
            }
        })

        getMovies();
    }
</script>