from django.db import models

class Img(models.Model):
    nome = models.CharField(max_length=200)
    img = models.ImageField(upload_to='imagens/')