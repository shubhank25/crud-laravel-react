# 🛍️ React Laravel CRUD Application

A modern, full-stack CRUD application with Laravel backend API and React.js frontend featuring TypeScript, colorful UI, and advanced data management capabilities.

## 📦 Installation

### Clone Repository
```bash
git clone https://github.com/shubhank25/crud-laravel-react.git
cd crud-laravel-react
```

## ✨ Features

### 🎨 **Modern UI/UX**
- ✅ Colorful gradient backgrounds and vibrant design
- ✅ Responsive design with Tailwind CSS
- ✅ Animated icons with hover effects
- ✅ Modern modal forms with emojis
- ✅ Toast notifications with custom styling
- ✅ Shopping cart favicon and branding

### 📊 **Advanced Data Management**
- ✅ Advanced DataTable with search, sorting, and pagination
- ✅ Global search with text highlighting
- ✅ Excel export with colorful headers and borders
- ✅ PDF export with professional formatting
- ✅ Real-time data filtering
- ✅ Custom validation messages

### 🚀 **Performance Optimized**
- ✅ Database indexing for fast queries
- ✅ Optimized API responses
- ✅ 11,000+ sample products for testing
- ✅ Newest products appear first

### 🔧 **Technical Features**
- ✅ Create, Read, Update, Delete products
- ✅ Modern React with TypeScript
- ✅ Laravel API with validation
- ✅ CORS enabled for cross-origin requests
- ✅ MySQL/SQLite database support

## 🛠️ Tech Stack

### Backend (Laravel 12)
- **Framework**: Laravel 12
- **Database**: MySQL/SQLite with indexing
- **API**: RESTful API with JSON responses
- **Validation**: Server-side validation
- **CORS**: Enabled for React frontend

### Frontend (React 18)
- **Framework**: React 18 with TypeScript
- **Styling**: Tailwind CSS with custom gradients
- **HTTP Client**: Axios for API calls
- **Notifications**: React Hot Toast
- **Icons**: Heroicons with animations
- **Data Table**: react-data-table-component
- **Export**: XLSX and PDF generation

## 🚀 Quick Start

### Backend Setup

1. **Navigate to backend directory:**
```bash
cd backend
```

2. **Install dependencies:**
```bash
composer install
```

3. **Setup environment:**
```bash
copy .env.example .env
php artisan key:generate
```

4. **Database setup:**
```bash
php artisan migrate
php artisan db:seed --class=ProductSeeder
```

5. **Start server:**
```bash
php artisan serve
```
🌐 API available at: `http://localhost:8000`

### Frontend Setup

1. **Navigate to frontend directory:**
```bash
cd frontend
```

2. **Install dependencies:**
```bash
npm install
```

3. **Start development server:**
```bash
npm start
```
🌐 App available at: `http://localhost:3000`

## 📡 API Endpoints

| Method | Endpoint | Description |
|--------|----------|-------------|
| `GET` | `/api/products` | Get all products (newest first) |
| `POST` | `/api/products` | Create a new product |
| `GET` | `/api/products/{id}` | Get specific product |
| `PUT` | `/api/products/{id}` | Update product |
| `DELETE` | `/api/products/{id}` | Delete product |

## 📋 Product Schema

```json
{
  "id": 1,
  "name": "Premium Laptop 1",
  "description": "High-quality product with excellent features",
  "price": 45000,
  "quantity": 25,
  "created_at": "2024-11-05T18:35:56.000000Z",
  "updated_at": "2024-11-05T18:35:56.000000Z"
}
```

## 🎯 Usage Guide

### 📱 **Main Interface**
1. **View Products**: Browse through 11,000+ sample products in a colorful table
2. **Search**: Use the search icon to find products across all columns
3. **Sort**: Click column headers to sort data
4. **Paginate**: Navigate through pages (10/20/50/100 per page)

### ➕ **Adding Products**
1. Click the "Add Product" button
2. Fill in the colorful modal form:
   - 🏷️ Product Name
   - 📝 Description
   - 💰 Price (numbers only)
   - 📦 Quantity (whole numbers only)
3. Get instant validation feedback
4. New products appear at the top

### ✏️ **Editing Products**
1. Click the blue edit icon
2. Modify fields in the pre-filled form
3. Save changes with visual feedback

### 🗑️ **Deleting Products**
1. Click the red delete icon
2. Confirm in the modern delete modal
3. Product removed with animation

### 📊 **Export Features**
- **Excel**: Download colorful XLSX with borders and formatting
- **PDF**: Generate professional PDF reports with headers and styling

## 🎨 UI Features

### 🌈 **Color Scheme**
- **Background**: Purple to pink gradient
- **Headers**: Blue to purple gradients
- **Buttons**: Colorful with hover animations
- **Text**: Violet input text throughout
- **Icons**: Animated on hover

### 📱 **Responsive Design**
- Mobile-friendly table
- Adaptive layouts
- Touch-friendly buttons
- Optimized for all screen sizes

## 🏗️ Project Structure

```
react-laravel-crud/
├── 🔧 backend/                 # Laravel API
│   ├── app/
│   │   ├── Http/Controllers/   # API Controllers
│   │   └── Models/            # Eloquent Models
│   ├── database/
│   │   ├── migrations/        # Database Schema
│   │   └── seeders/          # Sample Data
│   ├── routes/api.php        # API Routes
│   └── config/cors.php       # CORS Configuration
├── 🎨 frontend/               # React App
│   ├── src/
│   │   ├── components/       # React Components
│   │   │   ├── ProductList.tsx
│   │   │   ├── ProductForm.tsx
│   │   │   └── DeleteModal.tsx
│   │   ├── services/         # API Services
│   │   ├── types/           # TypeScript Types
│   │   └── App.tsx          # Main App
│   ├── public/
│   └── package.json
├── 📚 README.md              # This file
├── start-backend.bat         # Quick start scripts
└── start-frontend.bat
```

## 🚀 Performance Features

- **Database Indexing**: Fast queries on name, price, created_at
- **Optimized API**: Select only required fields
- **Client-side Pagination**: Smooth navigation
- **Search Highlighting**: Visual feedback
- **Lazy Loading**: Efficient rendering

## 🎉 Sample Data

The application comes with **11,000 sample products** including:
- Various product categories
- Random prices (₹500 - ₹50,000)
- Different quantities (1-100)
- Realistic product names and descriptions

## 🔧 Development

### 🛠️ **Adding New Features**
1. Backend: Add routes in `routes/api.php`
2. Frontend: Create components in `src/components/`
3. Styling: Use Tailwind CSS classes
4. Icons: Import from Heroicons

### 🎨 **Customizing Colors**
- Modify gradient backgrounds in components
- Update Tailwind color classes
- Change toast notification colors
- Customize table styling

## 📄 License

This project is open source and available under the MIT License.

## 🔗 Repository

**GitHub**: [https://github.com/shubhank25/crud-laravel-react.git](https://github.com/shubhank25/crud-laravel-react.git)

---

**Made with ❤️ using Laravel & React**

🌟 **Star this repo if you found it helpful!**