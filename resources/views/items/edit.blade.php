<form method="POST" action="{{ route('items.update', $item->id) }}" enctype="multipart/form-data">
@csrf
@method('PUT')