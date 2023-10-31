import React from 'react';
import { Container, Row, Col } from 'react-bootstrap';

const ContactPage = () => {
    return (
        <section className="pt-5 vh-50">
            <Container className="py-5">
                <h3 className="text-center py-3">Contact Us</h3>
                <Row className="py-5">
                    <Col md="6">
                        <h5>The Office</h5>
                        <div className="py-3 text-start opacity-50">
                            <p className="m-0"><strong>Address:</strong> Jl. Raya Tlogomas No.246, Jawa Timur 65144, Indonesia</p>
                            <p className="m-0"><strong >Phone:</strong> (0341) 464318, ext 252</p>
                            <p className="m-0"><strong >WA/Telegram:</strong> wa.me/6289689601317</p>
                            <p className="m-0"><strong >Email:</strong> lab.informatika@umm.ac.id</p>
                        </div>
                    </Col>

                    <Col md="6">
                        <h5>Business Hours</h5>
                        <div className="py-3 text-start opacity-50">
                            <p className="m-0">Monday - Friday 8am to 4pm</p>
                            <p className="m-0">Saturday - 8am to 12pm</p>
                            <p className="m-0">Sunday - Closed</p>
                        </div>
                    </Col>
                </Row>
            </Container>
        </section>
    );
}

export default ContactPage
