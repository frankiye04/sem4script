const nodemailer = require('nodemailer');
const transporter = nodemailer.createTransport({
 service: 'gmail',
 auth: {
 user: 'vishal122college@gmail.com',
 pass: 'lain zxgv dkqm svur'
 }
});

const mailOptions = {
 from: 'vishal122college@gmail.com',
 to: 'vishalgamer1407@gmail.com',
 subject: 'Test Email from Node.js',
 text: 'Hello! perarasu This is a test email sent using Node.js and Nodemailer.'
};
transporter.sendMail(mailOptions, (error, info) => {
 if (error) {
 console.error('Error occurred:', error);
 } else {
 console.log('Email sent successfully:', info.response);
 }
});