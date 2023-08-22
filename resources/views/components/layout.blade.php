<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Laravel Website</title>

		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap"
			rel="stylesheet" />
	</head>

	<body style="font-family: Open Sans, sans-serif">
		<section class="px-6 py-8">
			<nav class="flex justify-between items-center text-xs font-bold uppercase">
				<div>
					<a href="/" class="flex items-center gap-1.5">
						<x-icon name="home" />
						Home
					</a>
				</div>

				<div class="flex items-center gap-x-5">
					@auth
					<span>Welcome, {{ auth()->user()->name }}</span>
					<form method="POST" action="/logout" class="text-blue-500">
						@csrf
						<button type="submit">Log Out</button>
					</form>
					@else
					<a href="/register">Register</a>
					<a href="/login">Log In</a>
					@endauth
				</div>
			</nav>

			@yield('header')

			<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
				{{ $slot }}
			</main>

			<footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
				<h5 class="text-3xl">Stay in touch with the latest posts</h5>
				<p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>

				<div class="mt-10">
					<div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">
						<form method="POST" action="#" class="lg:flex text-sm">
							<div class="lg:py-3 lg:px-5 flex items-center">
								<label for="mailingListEmail" class="hidden lg:inline-block">
									<img src="/images/mailbox-icon.svg" alt="mailbox letter" />
								</label>

								<input id="mailingListEmail" type="text" placeholder="Your email address"
									class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none" />
							</div>

							<button type="submit"
								class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8">
								Subscribe
							</button>
						</form>
					</div>
				</div>
			</footer>
		</section>

		<x-flash :keys="['success']" />

		<script src="https://cdn.tailwindcss.com"></script>
		@stack('scripts')
	</body>

</html>