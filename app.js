const express = require('express');
const multer = require('multer');
const path = require('path');
const app = express();
const storage = multer.diskStorage({
 destination: (req, file, cb) => {
 cb(null, 'C:NodeFileUpload/uploads');
 },
 filename: (req, file, cb) => {
 cb(null, `${Date.now()}-${file.originalname}`);
 }});
 const upload = multer({ storage: storage });
 app.get('/', (req, res) => {
  res.send(`
  <h1>File Upload</h1>
  <form action="/upload" method="post" enctype="multipart/form-data">
  <input type="file" name="file" />
  <button type="submit">Upload</button>
  </form>
  `);
 });
 app.post('/upload', upload.single('file'), (req, res) => {
  if (!req.file) {
  return res.status(400).send('No file uploaded.');
  }
  res.send(`File uploaded successfully: ${req.file.filename}`);
 });
 const PORT = 3000;
 app.listen(PORT, () => {
  console.log(`Server running at http://localhost:${PORT}`);
 });