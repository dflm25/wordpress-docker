import React, { useState } from 'react';
import { createRoot } from 'react-dom/client';
import { useForm } from 'react-hook-form';
import swal from 'sweetalert';

import Overlay from '../components/overlay';
import { HOST_API } from '../config';

const RegisterForm = () => {
  const [loading, setLoading] = useState(false);
  const {
    register,
    handleSubmit,
    watch,
    formState: { errors },
    reset,
  } = useForm();

  const onSubmit = async (data) => {
    // setLoading(true);
    const response = await fetch(`${HOST_API}contact-form`, {
      method: 'POST',
      body: JSON.stringify(data),
      headers: {
        'Content-Type': 'application/json',
      },
    });
    setLoading(false);

    swal('Great!', 'Form sent successfully!', 'success');
    reset();
  };

  return (
    <>
      <form
        id="hook-form"
        className="contact-form"
        onSubmit={handleSubmit(onSubmit)}
      >
        <div className="form-group">
          <input
            type="text"
            className="form-control"
            placeholder="Your Name"
            {...register('name', { required: true, maxLength: 20 })}
          />
          <div className="label-box text-danger">
            {errors.name && <span>{errors.name.message}</span>}
          </div>
        </div>
        <div className="form-group">
          <input
            type="text"
            className="form-control"
            placeholder="Your Mail"
            {...register('email', {
              required: true,
              maxLength: 25,
              pattern: {
                value: /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}$/i,
                message: 'invalid email address',
              },
            })}
          />
          <div className="label-box text-danger">
            {errors.email && <span>{errors.email.message}</span>}
          </div>
        </div>
        <div className="form-group">
          <input
            type="text"
            className="form-control"
            placeholder="Your phone"
            {...register('phone', { required: true, maxLength: 20 })}
          />
          <div className="label-box text-danger">
            {errors.phone && <span>{errors.phone.message}</span>}
          </div>
        </div>
        <div className="form-group">
          <textarea
            className="form-control"
            rows="5"
            placeholder="Your Messages"
            {...register('message')}
          ></textarea>
          <div className="label-box text-danger">
            {errors.message && <span>{errors.message.message}</span>}
          </div>
        </div>
        <div className="form-btn text-right">
          <button
            type="button"
            className="btn-1 contactsuccess"
            onClick={handleSubmit(onSubmit)}
          >
            Submit
          </button>
        </div>
      </form>
      {loading && <Overlay />}
    </>
  );
};

if (document.getElementById('registerForm')) {
  const container = document.getElementById('registerForm');
  const root = createRoot(container); // createRoot(container!) if you use TypeScript
  root.render(<RegisterForm />);
}
