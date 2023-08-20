<x-mail::message>
# Order Shipped
 
Your order has been mohammad !
 
<x-mail::button :url="$url">
View Order
</x-mail::button>
 
Thanks,<br>
{{ config('app.name') }}
</x-mail::message>