{{-- @extends('include.navbar')

@section('content')
    <div class="container">
        <div class="row g-5">
            <h1 class="text-center">Ansewr the Questions</h1>
             <p class="text-center"> this help us to Recommend the plane </p>
        
        <form method="post" action="{{ route('register') }}" class="row g-3">
            @csrf
            <div class="col-md-6 offset-3">
                <div class="row g-5">


                    <div class="col-md-12">
                        <label for="select" class="fw-bold pb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, culpa voluptatem eaque voluptate vero eos.</label>
                        <select class="form-select   form-select-md @error('select') is-invalid @enderror"
                            aria-label="Small select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        @error('select')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <div class="col-md-12">
                        <label for="select" class="fw-bold  pb-4 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, culpa voluptatem eaque voluptate vero eos.</label>
                        <select class="form-select form-select-md @error('select') is-invalid @enderror"
                            aria-label="Small select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        @error('select')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <div class="col-md-12">
                        <label for="select" class="fw-bold  pb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, culpa voluptatem eaque voluptate vero eos.</label>
                        <select class="form-select form-select-md @error('select') is-invalid @enderror"
                            aria-label="Small select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        @error('select')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <div class="col-md-12">
                        <label for="select" class="fw-bold  pb-4 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, culpa voluptatem eaque voluptate vero eos.</label>
                        <select class="form-select form-select-md @error('select') is-invalid @enderror"
                            aria-label="Small select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        @error('select')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <div class="col-md-12">
                        <label for="select" class="fw-bold  pb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, culpa voluptatem eaque voluptate vero eos.</label>
                        <select class="form-select form-select-md @error('select') is-invalid @enderror"
                            aria-label="Small select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        @error('select')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <div class="col-md-12">
                        <label for="select" class="fw-bold  pb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, culpa voluptatem eaque voluptate vero eos.</label>
                        <select class="form-select form-select-md @error('select') is-invalid @enderror"
                            aria-label="Small select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        @error('select')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <div class="col-md-12">
                        <label for="select" class="fw-bold  pb-4 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, culpa voluptatem eaque voluptate vero eos.</label>
                        <select class="form-select form-select-md @error('select') is-invalid @enderror"
                            aria-label="Small select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        @error('select')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <div class="col-md-12">
                        <label for="select" class="fw-bold pb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, culpa voluptatem eaque voluptate vero eos.</label>
                        <select class="form-select form-select-md @error('select') is-invalid @enderror"
                            aria-label="Small select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        @error('select')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                



                    <button type="submit" class="btn btn-primary ">
                        {{ __('Submit') }}
                    </button>
                </div>
            </div>
        </form>
    @endsection --}}
    @extends('include.navbar')

    @section('content')
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">Answer the Questions</h1>
                    <p class="text-center">This helps us to recommend the best plan</p>
                </div>
            </div>
    
            <form method="post" action="{{ route('register') }}" class="row g-3" id="questionForm">
                @csrf
                <div class="col-md-6 offset-md-3">
                    <!-- Question 1 -->
                    <div class="form-group mb-4">
                        <label for="region" class="fw-bold pb-2">Which region do you prefer?</label>
                        <select id="region" name="region" class="form-select form-select-md @error('region') is-invalid @enderror" aria-label="Region select">
                            <option selected disabled>Open this select menu</option>
                            <option value="Cairo">Cairo</option>
                            <option value="Giza">Giza</option>
                            <option value="Alexandria">Alexandria</option>
                            <option value="Luxor">Luxor</option>
                            <option value="Aswan">Aswan</option>
                            <option value="Minya">Minya</option>
                            <option value="Red Sea">Red Sea</option>
                            <option value="Sinai">Sinai</option>
                            <option value="Western Desert">Western Desert</option>
                        </select>
                        @error('region')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
    
                    <!-- Question 2 -->
                    <div class="form-group mb-4">
                        <label for="placeType" class="fw-bold pb-2">What type of place do you prefer?</label>
                        <select id="placeType" name="placeType" class="form-select form-select-md @error('placeType') is-invalid @enderror" aria-label="Place type select">
                            <option selected disabled>Open this select menu</option>
                            <option value="Entertainment">Entertainment</option>
                            <option value="Tourism">Tourism</option>
                            <option value="Natural">Natural</option>
                        </select>
                        @error('placeType')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
    
                    <!-- Question 3 -->
                    <div class="form-group mb-4">
                        <label for="foodType" class="fw-bold pb-2">What type of food do you prefer?</label>
                        <select id="foodType" name="foodType" class="form-select form-select-md @error('foodType') is-invalid @enderror" aria-label="Food type select">
                            <option selected disabled>Open this select menu</option>
                            <option value="Egyptian">Egyptian</option>
                            <option value="Fast Food">Fast Food</option>
                            <option value="European">European</option>
                            <option value="Seafood">Seafood</option>
                        </select>
                        @error('foodType')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
    
                    <button type="submit" class="btn btn-primary btn-block" onclick="submitForm(event)">Submit</button>
                </div>
            </form>
        </div>
    
        <!-- Bootstrap Modal for displaying recommendations -->
        <div class="modal fade" id="recommendationsModal" tabindex="-1" role="dialog" aria-labelledby="recommendationsModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="recommendationsModalLabel">Recommendations</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5 class="mb-3">Places</h5>
                        <div id="placesList" class="row"></div>
                        <h5 class="mt-4 mb-3">Restaurants</h5>
                        <div id="restaurantsList" class="row"></div>
                        <h5 class="mt-4 mb-3">Hotels</h5>
                        <div id="hotelsList" class="row"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    
        <script>
            function submitForm(event) {
                event.preventDefault();
                const form = document.getElementById('questionForm');
                const data = new FormData(form);
                const value = Object.fromEntries(data.entries());
                delete value._token;
    
                fetch('http://localhost:8080/get_recommendations', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(value)
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Success:', data);
                    displayRecommendations(data);
                })
                .catch((error) => {
                    console.error('Error:', error);
                });
            }
    
            function displayRecommendations(data) {
                // Clear previous data
                document.getElementById('placesList').innerHTML = '';
                document.getElementById('restaurantsList').innerHTML = '';
                document.getElementById('hotelsList').innerHTML = '';
    
                // Populate places
                if (data.places.length === 0) {
                    document.getElementById('placesList').innerHTML = '<p>No places recommended</p>';
                } else {
                    data.places.forEach(place => {
                        const card = `
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">${place.Place}</h5>
                                        <p class="card-text">
                                            <strong>Type:</strong> ${place.Type}<br>
                                            <strong>Rating:</strong> ${place.Rating}<br>
                                            <strong>Popularity:</strong> ${place.Popularity}<br>
                                            <strong>Activity Level:</strong> ${place.Activity_Level}<br>
                                            <strong>Budget:</strong> ${place.Budget}<br>
                                            <strong>Indoor/Outdoor:</strong> ${place.Indoor_Outdoor}<br>
                                            <strong>Opening Hours:</strong> ${place.Opening_Hours}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        `;
                        document.getElementById('placesList').insertAdjacentHTML('beforeend', card);
                    });
                }
    
                // Populate restaurants
                if (data.restaurants.length === 0) {
                    document.getElementById('restaurantsList').innerHTML = '<p>No restaurants recommended</p>';
                } else {
                    data.restaurants.forEach(restaurant => {
                        const card = `
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">${restaurant.Place}</h5>
                                        <p class="card-text">
                                            <strong>Food:</strong> ${restaurant.Food}<br>
                                            <strong>Rating:</strong> ${restaurant.Rating}<br>
                                            <strong>Popularity:</strong> ${restaurant.Popularity}<br>
                                            <strong>Ambiance:</strong> ${restaurant.Ambiance}<br>
                                            <strong>Average Cost:</strong> ${restaurant.Average_Cost}<br>
                                            <strong>Price Range:</strong> ${restaurant.Price_Range}<br>
                                            <strong>Opening Hours:</strong> ${restaurant.Opening_Hours}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        `;
                        document.getElementById('restaurantsList').insertAdjacentHTML('beforeend', card);
                    });
                }
    
                // Populate hotels
                if (data.hotels.length === 0) {
                    document.getElementById('hotelsList').innerHTML = '<p>No hotels recommended</p>';
                } else {
                    data.hotels.forEach(hotel => {
                        const card = `
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">${hotel.Hotels}</h5>
                                        <p class="card-text">
                                            <strong>Type:</strong> ${hotel.Type}<br>
                                            <strong>Rating:</strong> ${hotel.Rating}<br>
                                            <strong>Popularity:</strong> ${hotel.Popularity}<br>
                                            <strong>Facilities:</strong> ${hotel.Facilities}<br>
                                            <strong>Budget:</strong> ${hotel.Budget}<br>
                                            <strong>Opening Hours:</strong> ${hotel.Opening_Hours}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        `;
                        document.getElementById('hotelsList').insertAdjacentHTML('beforeend', card);
                    });
                }
    
                // Show the modal
                $('#recommendationsModal').modal('show');
            }
        </script>
    @endsection
    
    