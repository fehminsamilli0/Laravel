<h1>{{config('app.name')}}</h1>
<p> Salam {{$kullanici->adsoyad}}, kaydiniz başarılı.</p>
<p> Kaydınızı aktivleşdirmek için <a href="{{ config('app.url') }}/kullanici/aktiflestir/{{$kullanici->aktivasyon_anahtari}}">tıklayın</a> veya aşağıdaki bağlantıyı tarayıcınızda açın. </p>
<p>{{ config('app.url') }}/kullanici/aktiflestir/{{$kullanici->aktivasyon_anahtari}}</p>
