<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>

    <script src="{{asset('Admin/Tailwind.cjs')}}"></script>
  </head>
  <body>
    <div class="max-w-4xl mx-auto mt-8 px-4">
      <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <div class="p-4">
          <p class="mb-6">
          </p>
          <form action="{{route('Login.store')}}" method="post">
          {{csrf_field()}}
            <div class="mb-4">
              <label class="block text-gray-700 font-bold mb-2" for="">
                FirstName
              </label>
              <input
                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="fname"
                type="text"
                placeholder="Enter your first name"
              />
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 font-bold mb-2" for="">
                LastName
              </label>
              <input
                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="lname"
                type="text"
                placeholder="Enter your last name"
              />
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 font-bold mb-2" for="">
                identity_no
              </label>
            <input
                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="identity_no"
                type="text"
                placeholder="Enter your identity_no"
              />
            </div>
              <div class="mb-4">
              <label class="block text-gray-700 font-bold mb-2" for="">
                Phone
              </label>
              <input
                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="phone"
                type="number"
                placeholder="Enter your phone"
              />
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 font-bold mb-2" for="">
                Date
              </label>
            <input
                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="BOD"
                type="date"
                placeholder="Enter your Date"
              />
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 font-bold mb-2" for="">
                Email
              </label>
              <input
                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="email"
                type="email"
                placeholder="Enter your email"
              />
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 font-bold mb-2" for="">
                Password
              </label>
            <input
                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="password"
                type="text"
                placeholder="Enter your Password"
              />
            </div>
            
            <div class="flex items-center justify-between">
              <button
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="button"
              >
                Login
              </button>
              <button
                class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="Submit"
              >
                Cancel
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
