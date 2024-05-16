import { useState } from "react";
import Modal from "./Modal";
import PrimaryButton from "./PrimaryButton";

export default function Message({ message }) {
    const [showMessage, setShowMessage] = useState(false);

    const closeModal = () => {
        setShowMessage(false);
    };

    return (
        <>
            <PrimaryButton onClick={() => setShowMessage(true)}>
                Zobacz wiadomość
            </PrimaryButton>
            <Modal show={showMessage} onClose={closeModal}>
                <p>{message && message}</p>
            </Modal>
        </>
    );
}
