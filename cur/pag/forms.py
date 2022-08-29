from socket import fromshare
from django import forms
from .models import *

class ImgForm(forms.ModelForm):
    class Meta:
        model = Img
        fields = ['nome', 'img']