# WordPress Child Theme Skeleton

WordPress için child tema geliştirme kiti.

## Açıklama

WordPress temalarına işlev kazandırmak ve güncellemelerden belirli alanları saklamak için
child theme kullanılır. Child tema ile; üzerinde çalıştığınız siteniz daha korunaklı ve güvenli bir
hale gelir.

## Kurulum

`wp-content/themes` dizininde, kullanmak istediğiniz temanın ismi ve `-child` şeklinde yani:

```
/wp-content
-themes
--themename
--themename-child
```

şeklinde oluşturulmalıdır.

style.css dosyası içerisindeki:

```
Theme Name:   THEME NAME
Text Domain:  THEME DOMAIN
```

Alanlarını doldurmanız gerekmektedir. `Theme Name` alanı; child temanın ismi ve `Text Domain` alanı ise
ana temanın style.css dosyasında bulunan ve temanın diğer temalardan ayrılmasını sağlayan spesifik bir isimdir.

## Kullanım

Child Theme de kullanılan ana tema gibi functions.php dosyası üzerinden işlem yapar.
Gerekli değişiklikleri functions.php dosyası üzerinden yapmanız gerekmektedir.

`functions.php` dosyası içerisinde 2 farklı fonksiyon tanımlanmıştır. Bunlar:

```
add_parent_style();
add_child_style();
```

`add_parent_style()` fonksiyonu, child temadaki `style.css` dosyasını temaya ekler. Bu fonksiyonun her zaman çalışması yerinde olacaktır. Dolasıyla, functions.php dosyasında:

```
add_action('wp_enqueue_scripts', 'add_parent_style');
```

şeklinde satır eklenmiştir.

`add_child_style()` fonksiyonu, child temada kullanılan diğer CSS dosyalarını eklemek için kullanılır. Child temanızda, şayet ekstra bir CSS dosya yoksa; kullanılmasına gerek yoktur. Zaten functions.php dosyasına pasifize edilmiştir. Gerekli olması durumunda aktif edilebilir.

```
// add_action('wp_enqueue_scripts', 'add_child_style');
```

## Destek

Herhangi bir konuda destek almak için aşağıdaki e-mail adresi ile ulaşabilirsiniz.

```
destek@wpkral.com
```
