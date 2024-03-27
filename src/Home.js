// Home.js
import React, { useState, useEffect } from "react";
import axios from "axios";
import Card from "@mui/material/Card";
import CardActions from "@mui/material/CardActions";
import CardContent from "@mui/material/CardContent";
import CardMedia from "@mui/material/CardMedia";
import Button from "@mui/material/Button";
import Typography from "@mui/material/Typography";
import styled from "styled-components";
import Header from "./Header";

const ItemWrapper = styled.div`
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
`;

const Home = () => {
  const [data, setData] = useState([]);

  useEffect(() => {
    const fetchData = async () => {
      try {
        const response = await axios.get(
          "https://createlogin.vercel.app/home.php"
        );
        setData(response.data);
      } catch (error) {
        console.error("Error fetching data:", error);
      }
    };

    fetchData();
  }, []);

  return (
    <>
      <Header />
      <ItemWrapper>
        {data.map((item, index) => (
          <Card key={index} style={{ margin: 20 }} sx={{ maxWidth: 345 }}>
            <CardMedia
              sx={{ height: 180, width: 300 }}
              image={item.img}
              alt={item.name}
              title="green iguana"
            />
            <CardContent>
              <Typography gutterBottom variant="h5" component="div">
                {item.name}
              </Typography>
              <Typography variant="body2" color="text.secondary">
                ・住所 / {item.location}
                <br />
                ・現在の入居者数 / {item.share}人
                <br />
                ・オーナー / {item.owner}
                <br />
                ・築年数 / {item.age}年
              </Typography>
            </CardContent>
            <CardActions>
              <Button size="small" variant="contained" color="primary">
                お気に入り
              </Button>
              <Button size="small" variant="contained" color="primary">
                問い合わせる
              </Button>
            </CardActions>
          </Card>
        ))}
      </ItemWrapper>
    </>
  );
};

export default Home;
