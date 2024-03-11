<x-mail::message>
# Contact formulier van {{ $formData['name'] }}

**Titel:** {{ $formData['title'] }}<br>
**E-mail:** {{ $formData['email'] }}<br><br>
## Bericht:
<br>
{{ $formData['contactText'] }}

{{-- <x-mail::button :url="''">
Button Text
</x-mail::button> --}}
<br><br><br>
Verstuurd vanaf,<br>
{{ config('app.name') }} website.
</x-mail::message>
