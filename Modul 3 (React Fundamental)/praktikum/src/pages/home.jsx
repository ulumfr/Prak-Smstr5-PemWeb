import React from 'react'
import { Container, Row, Col, Image } from 'react-bootstrap';
import ImgHero from '../assets/img/hero.jpg';

const HomePage = () => {
    return (
        <section className="vh-100">
            <Image src={ ImgHero } alt="hero-ilab" className="position-absolute w-100 h-100" draggable="false" />
                <Container className="h-100 position-relative">
                    <Row className="h-100">
                        <Col md="5" className="my-auto text-white">
                            <h1>Selamat Datang</h1>
                            <h2>di website Praktikum Pemrograman Website</h2>
                        </Col>
                    </Row>
                </Container>
        </section>
    )
}

export default HomePage
