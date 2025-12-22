{
  "name": "otp-login-feature",
  "version": "1.0.0",
  "description": "One-Time Password authentication system",
  "main": "src/index.js",
  "scripts": {
    "start": "node src/index.js",
    "dev": "nodemon src/index.js",
    "test": "jest",
    "test:watch": "jest --watch",
    "test:coverage": "jest --coverage",
    "migrate": "node migrations/run-migrations.js",
    "lint": "eslint src tests"
  },
  "dependencies": {
    "express": "^4.18.2",
    "bcrypt": "^5.1.0",
    "jsonwebtoken": "^9.0.0",
    "nodemailer": "^6.9.1",
    "twilio": "^4.7.2",
    "express-rate-limit": "^6.7.0",
    "joi": "^17.9.1",
    "mysql2": "^3.2.0",
    "redis": "^4.6.5"
  },
  "devDependencies": {
    "jest": "^29.5.0",
    "nodemon": "^2.0.22",
    "supertest": "^6.3.3",
    "eslint": "^8.38.0"
  }
}