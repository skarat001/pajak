
<div class="panel col-md-12 blue" >



	<h2 >Selamat Datang</h2>
	<h3>{{ Auth::user()->user_has_pribadi->nama }}</h3>

	<ul class="nav nav-stacked" id="sidebar">
		<li>
			@if($step==3)
			<a href="{{ URL::route('p_anggota') }}"><strong>Pendaftaran Anggota</strong></a></li>
			@endif
			<li><a href="{{ URL::route('profil') }}">Profil</a></li>
			<li><a href="#">Cek Email</a></li>
			@if($step>3)
			<li><a href="{{ URL::route('p_anggota') }}">Perpanjang Keanggotaan</a></li>
			@endif
			<li><a href="{{ url('/logout') }}">Logout</a></li>
		</ul>

		<br>
	</div>