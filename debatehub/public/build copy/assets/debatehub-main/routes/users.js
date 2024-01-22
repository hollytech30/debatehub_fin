import express from "express";
import { save_user } from "../database.js";


const userRouter = express.Router();

userRouter.get("/", (req, res) => {
  res.send("hello world");
});

import axios from 'axios';

userRouter.post("/regByStdNo", async (req, res) => {
  const studentNumber = req.body.studentNumber;

  try {
    // Make an HTTP request to fetch user data
    const response = await axios.get(`https://documents.kyu.ac.ug/api/v1/verifications/registration?studentNumber=${studentNumber}`);

    // Check if the request was successful (status code 200)
    if (response.status === 200) {
      const userData = response.data;
      const student = userData.data.student;
    //   add email, password, student_number to student object
      student.email = req.body.email
        student.password =  req.body.password
        student.student_number = studentNumber
      console.log(student);
        // Save user data to the database
       const user = await save_user(student);
       console.log(user);
        // redirect to debatehub.js with success message
        res.redirect('/debatehub', { success: true, message: 'Thank you for your submission!' });
    } else {
      // Handle other status codes if needed
      res.json({ success: false, message: 'Failed to register user' });
    }
  } catch (error) {
    console.error(error);
    res.status(500).json({ success: false, message: 'Internal Server Error' });
  }
});


userRouter.post("/regByData", (req, res) => {
  res.send("register by data");
});

userRouter.post("/login", (req, res) => {
  res.send("login");
});

export default userRouter;