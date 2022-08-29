from django.shortcuts import render

def cur(request):
    if request.method == "GET":
        return render(request, 'main.html')

    def hotel_image_view(request): 
  
        if request.method == 'POST': 
            form = HotelForm(request.POST, request.FILES) 
    if form.is_valid(): 
            form.save() 
            return redirect('success') 
    else: 
    form = HotelForm() 
        return render(request, 'hotel_image_form.html', {'form' : form}) 


        def success(request): 
        return HttpResponse('successfully uploaded') 