<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Furniture Viewer</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .marker {
      transition: transform 0.2s ease-in-out;
    }

    .marker:hover {
      transform: scale(1.2);
    }
  </style>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
  <div class="relative w-[500px] h-[400px]">
    <!-- Background image -->
    <img src="{{ asset('assets/img/BgHome.png') }}" alt="Furniture" class="object-cover w-full h-full rounded-lg shadow-md">
    
    <!-- Marker 1 -->
    <div 
      class="absolute top-[20%] left-[40%] w-6 h-6 bg-blue-500 rounded-full marker cursor-pointer"
      onclick="showDetails('Marble Wall')">
    </div>
    
    <!-- Marker 2 -->
    <div 
      class="absolute top-[10%] left-[75%] w-6 h-6 bg-blue-500 rounded-full marker cursor-pointer"
      onclick="showDetails('Wooden Panel')">
    </div>
    
    <!-- Marker 3 -->
    <div 
      class="absolute bottom-[10%] left-[35%] w-6 h-6 bg-blue-500 rounded-full marker cursor-pointer"
      onclick="showDetails('Wooden Floor')">
    </div>
  </div>

  <!-- Detail Popup -->
  <div id="popup" class="fixed hidden p-4 transform -translate-x-1/2 bg-white rounded-lg shadow-lg top-10 left-1/2">
    <button onclick="hideDetails()" class="absolute text-gray-500 top-1 right-2">&times;</button>
    <h2 class="text-lg font-semibold" id="popup-title"></h2>
    <p class="text-sm text-gray-600" id="popup-description">Here are the details.</p>
  </div>

  <script>
    function showDetails(title) {
      const popup = document.getElementById('popup');
      document.getElementById('popup-title').innerText = title;
      document.getElementById('popup-description').innerText = Details about ${title};
      popup.classList.remove('hidden');
    }

    function hideDetails() {
      const popup = document.getElementById('popup');
      popup.classList.add('hidden');
    }
  </script>
</body>
</html>