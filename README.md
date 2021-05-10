# Street Books

### Giriş

Laravel ile hazırladığım basit gereksinimleri karşılayan kitap organizasyon uygulaması,
- yeni kitap eklemek
- kitaplar hakkında yorum yapmak
- kitaplar hakkında tavsiye vermek



### Ekran Görüntüleri


<img width="800" alt="home" src="https://user-images.githubusercontent.com/27866989/117651597-c9950a80-b19a-11eb-93e0-8664841d2d1f.png">
<img width="800" alt="book-detail" src="https://user-images.githubusercontent.com/27866989/117653127-b71bd080-b19c-11eb-8155-d16605848339.png">
<img width="800" alt="book-detail-comment-guest" src="https://user-images.githubusercontent.com/27866989/117653199-c569ec80-b19c-11eb-9147-4a2531315884.png">
<img width="800" alt="book-detail-comment-login" src="https://user-images.githubusercontent.com/27866989/117653220-cd299100-b19c-11eb-971d-6e4c96b0577a.png">
<img width="800" alt="profile" src="https://user-images.githubusercontent.com/27866989/117653266-d6b2f900-b19c-11eb-8cdb-fe866fe5ace4.png">
<img width="800" alt="add-new-book" src="https://user-images.githubusercontent.com/27866989/117653285-de729d80-b19c-11eb-87fa-2f0c10e924b0.png">




### Kurulum

__NOT:__ Street Books ek eklentiler ve framework'ler kullanır, bu nedenle makinenizde [Composer](https://getcomposer.org/) ve [Node](https://nodejs.org/) kurulu olduğundan emin olun.

1. Yeni bir Terminal veya CMD uygulaması açın ve aşağıdaki komutu çalıştırın


```bash
git clone https://github.com/enesdeyeter/street-books-laravel.git
```

2. Devamında sırasıyla aşağıdaki komutları çalıştırın


```bash
cd street-books-laravel
``` 

```bash
composer install
```

```bash
cp .env.example .env
```

```bash
php artisan key:generate
```

```bash
npm install
```

```bash
npm run dev
```

```bash
php artisan migrate
```

```bash
php artisan db:seed
```

```bash
php artisan serve
```

Oluşturulan sunucu bağlantısına gidin (http://127.0.0.1:8000)
