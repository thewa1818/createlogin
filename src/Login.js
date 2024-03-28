import React, { useState } from "react";
import axios from "axios";
import { useHistory } from "react-router-dom";
import TextField from "@mui/material/TextField";
import Button from "@mui/material/Button";
import Box from "@mui/material/Box";
import Paper from "@mui/material/Paper";
import Stack from "@mui/material/Stack";
import { styled as styledMaterial } from "@mui/material/styles"; // 別名を付けてインポートする
import styled from "styled-components";

const MaterialItem = styledMaterial(Paper)(({ theme }) => ({
  backgroundColor:
    theme.palette.mode === "dark"
      ? "rgba(255, 0, 0, 0.3)"
      : "rgba(255, 0, 0, 0.1)", // 透けてる赤みたいな色に設定
  ...theme.typography.body2,
  padding: theme.spacing(1),
  textAlign: "center",
  color: theme.palette.text.secondary,
}));

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
        {message && ( // メッセージが空でない場合にのみ表示
          <Box sx={{ width: "100%", paddingTop: 5 }}>
            <Stack spacing={2}>
              <MaterialItem style={{ padding: 20 }}>{message}</MaterialItem>
            </Stack>
          </Box>
        )}
      </StyledForm>
    </CenteredContainer>
  );
};

export default Login;
