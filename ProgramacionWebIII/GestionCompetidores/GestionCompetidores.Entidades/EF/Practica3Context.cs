﻿using System;
using System.Collections.Generic;
using Microsoft.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore.Metadata;

namespace GestionCompetidores.Entidades.EF
{
    public partial class Practica3Context : DbContext
    {
        public Practica3Context()
        {
        }

        public Practica3Context(DbContextOptions<Practica3Context> options)
            : base(options)
        {
        }

        public virtual DbSet<Competidor> Competidors { get; set; } = null!;
        public virtual DbSet<Deporte> Deportes { get; set; } = null!;

        protected override void OnConfiguring(DbContextOptionsBuilder optionsBuilder)
        {
            if (!optionsBuilder.IsConfigured)
            {
#warning To protect potentially sensitive information in your connection string, you should move it out of source code. You can avoid scaffolding the connection string by using the Name= syntax to read it from configuration - see https://go.microsoft.com/fwlink/?linkid=2131148. For more guidance on storing connection strings, see http://go.microsoft.com/fwlink/?LinkId=723263.
                optionsBuilder.UseSqlServer("Server=DESKTOP-VU9C71D\\SQLEXPRESS;Database=Practica3;Trusted_Connection=True;");
            }
        }

        protected override void OnModelCreating(ModelBuilder modelBuilder)
        {
            modelBuilder.Entity<Competidor>(entity =>
            {
                entity.HasKey(e => e.IdCompetidor)
                    .HasName("PK__Competid__1B4C0B76A8B517DD");

                entity.ToTable("Competidor");

                entity.Property(e => e.NombreCompetidor).HasMaxLength(50);

                entity.HasOne(d => d.IdDeporteNavigation)
                    .WithMany(p => p.Competidors)
                    .HasForeignKey(d => d.IdDeporte)
                    .OnDelete(DeleteBehavior.ClientSetNull)
                    .HasConstraintName("FK__Competido__IdDep__398D8EEE");
            });

            modelBuilder.Entity<Deporte>(entity =>
            {
                entity.HasKey(e => e.IdDeporte)
                    .HasName("PK__Deporte__B5FFCC7D84A1C95F");

                entity.ToTable("Deporte");

                entity.Property(e => e.NombreDeporte).HasMaxLength(50);
            });

            OnModelCreatingPartial(modelBuilder);
        }

        partial void OnModelCreatingPartial(ModelBuilder modelBuilder);
    }
}
