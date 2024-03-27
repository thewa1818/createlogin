import React, { useState } from "react";
import axios from "axios";
import { useHistory } from "react-router-dom";
import TextField from "@mui/material/TextField";
import Button from "@mui/material/Button";
import styled from "styled-components";

const CenteredContainer = styled.div`
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
`;
const StyledForm = styled.form`
  text-align: center;
`;

const StyledInput = styled.div`
  padding: 6px;
`;

const Login = () => {
  const [id, setId] = useState("");
  const [password, setPassword] = useState("");
  const [message, setMessage] = useState("");
  const history = useHistory();

  const handleIdChange = (event) => {
    setId(event.target.value);
  };

  const handlePasswordChange = (event) => {
    setPassword(event.target.value);
  };

  const handleSubmit = async (event) => {
    event.preventDefault();

    try {
      const response = await axios.post("http://localhost/login.php", {
        id: id,
        password: password,
      });

      if (response.data.success) {
        // ログインが成功した場合、トークンを保存し、Homeコンポーネントにリダイレクトする
        localStorage.setItem("token", response.data.token);
        history.push("/home");
      } else {
        setMessage(response.data.message);
      }
    } catch (error) {
      console.error("Error logging in:", error);
    }
  };

  return (
    <CenteredContainer>
      <StyledForm onSubmit={handleSubmit}>
        <StyledInput>
          <TextField
            required
            id="outlined-required"
            label="ID"
            type="text"
            value={id}
            onChange={handleIdChange}
          />
        </StyledInput>
        <StyledInput>
          <TextField
            id="outlined-password-input"
            label="Password"
            type="password"
            autoComplete="current-password"
            value={password}
            onChange={handlePasswordChange}
          />
        </StyledInput>
        <Button style={{ marginTop: 20 }} type="submit" variant="contained">
          login
        </Button>
        <p>{message}</p>
      </StyledForm>
    </CenteredContainer>
  );
};

export default Login;
