# 2025 NIT March Database

A PHP-based web application for managing the 2025 National Invitation Tournament (NIT) March Madness basketball tournament data. This system provides CRUD (Create, Read, Update, Delete) operations for managing team information including seeds, schools, and conferences.

## Features

- **User Authentication**: Secure login system with password hashing
- **User Registration**: New users can create accounts with password verification
- **Team Management**: Complete CRUD operations for tournament teams
- **Session Management**: Secure session handling for user authentication
- **Data Validation**: Input validation and error handling
- **Responsive Interface**: Clean HTML forms with JavaScript confirmations

## Database Schema

### Tables

**teams**
- `id` (int, auto_increment, PRIMARY KEY)
- `seed` (int) - Tournament seed number
- `school` (varchar(50)) - School name
- `conference` (varchar(50)) - Conference abbreviation

**users**
- `id` (int, auto_increment, PRIMARY KEY)
- `username` (varchar(255))
- `password` (varchar(255)) - Hashed password

## Installation

### Prerequisites

- PHP 7.0 or higher
- MySQL 5.7 or higher
- Apache/Nginx web server
- XAMPP/WAMP/LAMP stack (recommended for local development)

### Setup Steps

1. **Clone or download the project files** to your web server directory

2. **Create the database**
   ```sql
   -- Import the provided SQL file
   mysql -u root -p < march_2025.sql
   ```

3. **Configure database connection**
   
   Update the database credentials in all PHP files:
   ```php
   $servername = "localhost";
   $username = "root";        // Your MySQL username
   $password = "";            // Your MySQL password
   $dbname = "march";
   ```

4. **Set up web server**
   - Place files in your web server's document root (e.g., `htdocs`, `www`, `public_html`)
   - Ensure PHP sessions are enabled

5. **Default Admin Account**
   - Username: `admin`
   - Password: `pwd`

## Usage

### Getting Started

1. Navigate to `index.php` in your web browser
2. Login with the default admin credentials or register a new account
3. Use the menu to access CRUD operations

### CRUD Operations

**Create (Insert)**
- Access via "Create" menu item
- Add new teams with seed, school name, and conference

**Read (Select)**
- Access via "Read" menu item  
- View all teams ordered by seed number
- Displays seed, school, and conference information

**Update**
- Access via "Update" menu item
- Search for a team by school name
- Modify seed and conference (school name cannot be changed)

**Delete**
- Access via "Delete" menu item
- Remove teams by school name
- Includes JavaScript confirmation dialog

### User Management

**Registration**
- New users can register with username and password
- Password confirmation required
- Usernames must be unique

**Authentication**
- Secure login with password verification
- Session-based authentication
- Automatic logout for unauthorized access

## File Structure

```
├── index.php              # Main page with login/menu
├── authenticate.php       # Login processing
├── register.php          # User registration form
├── new_user.php          # Registration processing
├── menu.html             # Navigation menu
├── insert.php            # Create team form
├── do_insert.php         # Insert processing
├── select.php            # Display all teams
├── update.php            # Update team search form
├── display_for_update.php # Update team form
├── do_update.php         # Update processing
├── delete.php            # Delete team form
├── do_delete.php         # Delete processing
└── march_2025.sql        # Database schema and initial data
```

## Security Features

- **Password Hashing**: Uses PHP's `password_hash()` and `password_verify()`
- **Session Management**: Secure session-based authentication
- **Input Validation**: Basic validation and error handling
- **Access Control**: Protected pages require authentication

## Sample Data

The database comes pre-populated with 32 NIT tournament teams including:

- **#1 Seeds**: Dayton Flyers (A10), SMU Mustangs (ACC), UC Irvine Anteaters (BW), San Francisco Dons (WCC)
- **#2 Seeds**: George Mason Patriots (A10), Stanford Cardinal (ACC), North Texas Mean Green (Amer), Santa Clara Broncos (WCC)
- And teams seeded #3 through #8 from various conferences

## Known Issues & TODOs

- SQL injection vulnerability exists in some queries (use prepared statements for production)
- Basic error handling could be enhanced
- CSS styling not included (add for better UI/UX)
- Menu.html has a typo in include statement

## Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Test thoroughly
5. Submit a pull request

### Development Guidelines

- Follow PHP coding standards
- Use prepared statements for database queries
- Implement proper error handling
- Add input sanitization
- Include comments for complex logic

## License

This project is for educational purposes. Please check with your institution regarding usage and distribution.

## Support

For issues or questions:
- Check the code comments for TODO items and known issues
- Review the database schema in `march_2025.sql`
- Ensure proper file permissions and web server configuration

## Version History

- **v1.0**: Initial release with basic CRUD functionality
- Authentication system with password verification
- Session management and user registration

---

**Note**: This application is designed for educational purposes and may require additional security hardening for production use.
