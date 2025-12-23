{
  "name": "otp-login-system",
  "version": "1.0.0",
  "description": "Login system with OTP authentication",
  "main": "src/index.js",
  "scripts": {
    "start": "node src/index.js",
    "dev": "nodemon src/index.js",
    "test": "jest",
    "test:watch": "jest --watch",
    "test:coverage": "jest --coverage"
  },
  "dependencies": {
    "express": "^4.18.0",
    "bcryptjs": "^2.4.3",
    "jsonwebtoken": "^9.0.0",
    "mongoose": "^7.0.0",
    "redis": "^4.6.0",
    "express-rate-limit": "^6.7.0",
    "joi": "^17.9.0",
    "twilio": "^4.11.0",
    "nodemailer": "^6.9.0",
    "dotenv": "^16.0.0",
    "helmet": "^6.1.0",
    "cors": "^2.8.5"
  },
  "devDependencies": {
    "jest": "^29.5.0",
    "supertest": "^6.3.0",
    "nodemon": "^2.0.0",
    "@types/jest": "^29.5.0"
  }
}