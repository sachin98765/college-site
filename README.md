# Murarai Government Polytechnic - Website

College website with departments, gallery, login, and contact forms.

## Quick Setup (5 Minutes)

**Requirements**: PHP 7.4+ | MySQL 5.7+ | XAMPP/WAMP/LAMP

**Steps**:

1. Extract to web folder (XAMPP: `C:\xampp\htdocs`)
2. Start Apache & MySQL
3. Go to http://localhost/phpmyadmin → Import `setup_clg_db.sql`
4. Visit: http://localhost/Collage_project/

**Done!**

## How to Run

| Method     | Command                                   | URL                               |
| ---------- | ----------------------------------------- | --------------------------------- |
| XAMPP      | Start Control Panel, click Apache & MySQL | http://localhost/Collage_project/ |
| PHP Server | `php -S localhost:8000`                   | http://localhost:8000             |
| Direct     | `php index.php`                           | Browser auto-opens                |

## Login Info

```
Username: sachin
Password: sachin
```

**Production**: Use password hashing!

## All Pages

| Page       | File                                        | What it does                        |
| ---------- | ------------------------------------------- | ----------------------------------- |
| Home       | `index.php`                                 | Main page with hero + 3 departments |
| About      | `About.php`                                 | College info                        |
| Gallery    | `gallery.php`                               | Photos                              |
| CST        | `CST.php`                                   | Computer Science department         |
| ECE        | `ECE.php`                                   | Electronics department              |
| Survey Eng | `SE.php`                                    | Survey engineering                  |
| User Info  | `userinfo.php`                              | After login                         |
| Login      | `Login-System-php/index.php`                | Sign in                             |
| Dashboard  | `Login-System-php/home.php`                 | User home                           |
| Contact    | `Contact-Us/SourceCode/ContactUs/index.php` | Contact form                        |

## Database Details

**File to import**: `setup_clg_db.sql`

**Create database from phpMyAdmin**:

1. http://localhost/phpmyadmin
2. Click "Import"
3. Select `setup_clg_db.sql`
4. Click "Import"

**Edit database connection**:

- File: `Login-System-php/db_conn.php`
- Change: username, password, database name if needed

## Common Issues

| Problem              | Fix                                              |
| -------------------- | ------------------------------------------------ |
| "Connection failed!" | Check MySQL running + check db_conn.php settings |
| Images missing       | Check `image/` folder exists                     |
| Blank page           | Enable display_errors or check error logs        |
| Port 8000 in use     | Use `php -S localhost:8001`                      |
| Navigation broken    | Check navbar.php is in all files                 |

## Customization

### Change Colors

Edit: `css/style.css` - Section `:root`

```css
--primary-color: #003d82; /* Change these */
--secondary-color: #0066cc;
--accent-color: #00b4d8;
```

### Change Fonts

Edit: `head.php` - Update Google Fonts line

### Change Logo

Replace: `image/index.jpeg`

### Add New Page

Create `newpage.php` with:

```php
<?php include 'head.php'; ?>
<?php include 'navbar.php'; ?>

<!-- Your content here -->

<?php include 'footer.php'; ?>
<?php include 'scripts.php'; ?>
```

## Important Files

| File                           | Edit for              | Purpose               |
| ------------------------------ | --------------------- | --------------------- |
| `head.php`                     | Styles, meta tags     | Included in all pages |
| `navbar.php`                   | Menu, logo            | Navigation bar        |
| `footer.php`                   | Contact, links        | Footer section        |
| `css/style.css`                | Colors, fonts, design | All styling           |
| `Login-System-php/db_conn.php` | DB credentials        | Database connection   |

## Design

- **Modern UI**: Gradients, animations
- **Responsive**: Mobile, tablet, desktop
- **Colors**: Blue scheme (#003d82, #0066cc, #00b4d8)
- **Fonts**: Roboto (body), Poppins (headings)
- **Icons**: Font Awesome

See `DESIGN_GUIDE.md` for full details

## Tech Stack

- **Backend**: PHP 7.4+
- **Database**: MySQL 5.7+
- **Frontend**: Bootstrap 4.6, jQuery
- **Icons**: Font Awesome 6.0
- **Fonts**: Google Fonts

## Quick Tips

1. Always backup before changes
2. Test on mobile devices
3. Use HTTPS in production
4. Hash passwords before production
5. Keep images optimized for web
6. Test all links after changes

## Support

- Email: muraraigovt.poly@gmail.com
- Location: Murarai, Birbhum - 731222

---

**Version**: 2.0 (Modern Design) | **Updated**: May 2024

```
Collage_project/
│
├─ Main Pages
│  ├── index.php ..................... Home page (hero + departments)
│  ├── About.php ..................... About college
│  ├── gallery.php ................... Photo gallery
│  ├── CST.php ....................... CST department
│  ├── ECE.php ....................... ECE department
│  ├── SE.php ........................ Survey engineering
│  └── userinfo.php .................. User info portal
│
├─ Included on Every Page
│  ├── head.php ...................... Styles & meta tags
│  ├── navbar.php .................... Navigation & logo
│  ├── footer.php .................... Footer & map
│  └── scripts.php ................... Bootstrap & jQuery
│
├─ Login System
│  └── Login-System-php/
│      ├── index.php ................. Login page
│      ├── login.php ................. Login handler
│      ├── home.php .................. User dashboard
│      ├── logout.php ................ Logout
│      ├── db_conn.php ............... Database connection
│      ├── style.css ................. Login styles
│      └── db/test_db.sql ............ Backup
│
├─ Contact Form
│  └── Contact-Us/SourceCode/ContactUs/
│      ├── index.php ................. Contact form
│      ├── app.js .................... Form logic
│      ├── style.css ................. Form styles
│      └── img/ ...................... Images
│
├─ Styling & Scripts
│  ├── css/style.css ................. Main styles (MODERN)
│  └── index.js/index.js ............. JavaScript
│
├─ Images
│  ├── index.jpeg .................... Logo
│  ├── collage.jpeg .................. College photo
│  ├── [1-9].jpg ..................... Gallery photos
│  ├── CST/ .......................... CST photos
│  ├── ECE/ .......................... ECE photos
│  └── SE/ ........................... Survey eng photos
│
├─ Database & Docs
│  ├── setup_clg_db.sql .............. Import this file
│  ├── README.md ..................... This file
│  └── DESIGN_GUIDE.md ............... Design details
```
