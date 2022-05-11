import React from 'react';
import { createRoot } from 'react-dom/client';
import { useForm } from 'react-hook-form';

const RegisterForm = () => {
  const {
    register,
    handleSubmit,
    watch,
    formState: { errors },
  } = useForm();

  const onSubmit = (data) => {
    console.log(data);
  };

  return (
    <form
      action="#"
      id="registerForm"
      name="registerForm"
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
          {...register('email', { required: true, maxLength: 25 })}
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
        <input type="submit" className="btn-1 contactsuccess" value="Hire Me" />
      </div>
    </form>
  );
};

if (document.getElementById('registerForm')) {
  const container = document.getElementById('registerForm');
  const root = createRoot(container); // createRoot(container!) if you use TypeScript
  root.render(<RegisterForm />);
}
