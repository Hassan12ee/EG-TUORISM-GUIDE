@extends('include.navbar')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Answer the Questions</h1>
            <p class="text-center">This helps us to recommend the best plan</p>
        </div>
    </div>

    <form method="post" action="" class="row g-3" id="questionForm">
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

            <!-- Additional Questions -->
            <!-- Question 4 -->
            <div class="form-group mb-4">
                <label for="activities" class="fw-bold pb-2">What activities are you interested in?</label>
                <select id="activities" name="activities" class="form-select form-select-md @error('activities') is-invalid @enderror" aria-label="Activities select">
                    <option selected disabled>Open this select menu</option>
                    <option value="Sightseeing">Sightseeing</option>
                    <option value="Shopping">Shopping</option>
                    <option value="Relaxation">Relaxation</option>
                    <option value="Nightlife">Nightlife</option>
                </select>
                @error('activities')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <!-- Question 5 -->
            <div class="form-group mb-4">
                <label for="season" class="fw-bold pb-2">In which season do you prefer to travel?</label>
                <select id="season" name="season" class="form-select form-select-md @error('season') is-invalid @enderror" aria-label="Season select">
                    <option selected disabled>Open this select menu</option>
                    <option value="Spring">Spring</option>
                    <option value="Summer">Summer</option>
                    <option value="Fall">Fall</option>
                    <option value="Winter">Winter</option>
                </select>
                @error('season')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <!-- Question 6 -->
            <div class="form-group mb-4">
                <label for="accessibility" class="fw-bold pb-2">Do you have any accessibility needs?</label>
                <select id="accessibility" name="accessibility" class="form-select form-select-md @error('accessibility') is-invalid @enderror" aria-label="Accessibility select">
                    <option selected disabled>Open this select menu</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
                @error('accessibility')
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
                <a href="">save</a>
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

        fetch('https://airecommendation.onrender.com/get_recommendations', {
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
            saveRecommendations(data);
        })
        .catch((error) => {
            console.error('Error:', error);
        });
    }

    function saveRecommendations(data) {
        const user_id = localStorage.getItem('user_id');
        const places = data.places;
        const restaurants = data.restaurants;
        const hotels = data.hotels;
        fetch('{{ url("save_recommendations" ) }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({
                user_id,
                places,
                restaurants,
                hotels
            })
        })
        .then(response => response.json())
        .then(data => {
            console.log('Save success:', data);
        })
        .catch((error) => {
            console.error('Save error:', error);
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
                                    <strong>ID:</strong> ${place.ID}<br>
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
                                    <strong>ID:</strong> ${restaurant.ID}<br>
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
                                    <strong>ID:</strong> ${hotel.ID}<br>
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
