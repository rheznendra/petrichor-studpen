# Demo
[Here](http://137.184.248.66)

# Requirements :
- [Composer](https://getcomposer.org/download/)
- PHP 8.2
- [Laragon](https://laragon.org/download/) **(Don't use artisan serve, otherwise the python won't be execute because bug on the library)**
- Python with installed `tensorflow, joblib, numpy, scikit-learn, nltk`

# How to Install :

### 1. Clone this repo to your Laragon installation directory and put it on ***www*** folder
```bash
git clone https://github.com/rheznendra/petrichor-studpen
```

### 2. Open folder directory on CMD/Terminal then run :
```bash
composer install
```
```bash
cp .env.example .env
```
```bash
php artisan key-generate
```

### 3. (Optional) Install python if you haven't yet
```bash
pip install tensorflow nltk joblib numpy nltk scikit-learn
```

### 4. Open your Laragon application
- Open settings > auto create virtual host must be ON > Close setting
- Press start button on Laragon (*If there's any Windows pop up for apache/nginx (i use nginx) then click YES*)
- Open your browser then type [http://petrichor-studpen.test](http://petrichor-studpen.test) or change petrichor-studpen to your folder name you cloned from this github.

## Note :
If you use Linux for example Ubuntu and had python3 installed, do this on terminal, otherwise it will not execute the python script.
```bash
sudo apt install python-is-python3
```
```bash
alias python=python3
```

This step must be done because the library i use to execute python script on laravel use command `python` and not `python3` to execute.
